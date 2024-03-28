<?php
namespace App\Controller;
use Laminas\Diactoros\UploadedFile;

class UsersController extends AppController{
    public function initialize(): void{
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadComponent('Flash');
    }
    public function index(){
        // $users = $this->Paginator->paginate($this->Users->find());
        // $this->set(compact('users'));

        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
    }

    public function create(){
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());

            // Handle image upload
            $image = $this->request->getData('profile_image');
            if (!empty($image) && $image instanceof UploadedFile) {
                $filename = time() . $image->getClientFilename();
                $uploadPath = WWW_ROOT . 'img' . DS . 'uploads' . DS;
                $image->moveTo($uploadPath . $filename);
                $user->profile_image = $filename;
            }

            if ($this->Users->save($user)) {
                $this->Flash->success(__('The data has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The data could not be saved. Please, try again.'));
        }

        $this->set(compact('user'));
    }

    public function details($id = null){
        // if($id == null){
        //     return $this->redirect('/users');
        // }
        // $user = $this->Users->findById($id)->firstOrFail();
        // $this->set(compact('user'));

        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        $this->set(compact('user'));
    }

    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $requestData = $this->request->getData();
            unset($requestData['email']);

            $user = $this->Users->patchEntity($user, $requestData);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The data has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The data could not be saved. Please, try again.'));
        }

        $this->set(compact('user'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The data has been deleted.'));
        } else {
            $this->Flash->error(__('The data could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
?>
