<!-- <div>
    <form action="/users/create" method="post">
        @csrf
        <div class="form-group">
            <label for="">First Name</label>
            <input type="text" name="firstname">
        </div>
        <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" name="firstname">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="firstname">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="text" name="firstname">
        </div>
        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
    </form>
</div> -->


<div>
    <?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
    <div class="row">
        <aside class="column">
            <div class="side-nav">
                <h4 class="heading"><?= __('Actions') ?></h4>
                <?= $this->Html->link(__('List Data'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </div>
        </aside>
        <div class="column-responsive column-80">
            <div class="data form content">
                <?= $this->Form->create($user, array('type' =>'file','enctype'=>'multipart/form-data')) ?>
                <fieldset>
                    <legend><?= __('Add Data') ?></legend>
                    <?php
                        echo $this->Form->control('firstname');
                        echo $this->Form->control('lastname');
                        echo $this->Form->control('email');
                        echo $this->Form->control('password');
                        echo $this->Form->file('profile_image', ['type' => 'file']);
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>