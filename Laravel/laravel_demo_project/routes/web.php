<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SingleActionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });





// Route::get('/', function () {
//     return view('home');
// });



// Route::get('/register', function(){
//     return view('register');
// });





Route::view('/', 'demo/home');
Route::view('/about', 'demo/about');
Route::view('/post', 'demo/post');




function getUsers(){
    return [
        1 => ["name" => "Haresh", "age" => 21, "gender" => "Male"],
        2 => ["name" => "Manav", "age" => 22, "gender" => "Male"],
        3 => ["name" => "Mohit", "age" => 23, "gender" => "Male"],
        4 => ["name" => "Vishnu", "age" => 24, "gender" => "Male"]
    ];
}

Route::get('/users', function (){
    $users = getUsers();
    return view('users', ['users' => $users]);
});

Route::get('/user/{id}', function (string $id){
    $users = getUsers();
    abort_if(!isset($users[$id]), 404);
    $user = $users[$id];
    return view('user', ['user' => $user]);
});






// Route::get('/page/home', [PageController::class, 'getHome'])->name('pageHome');
// Route::get('/page/blog', [PageController::class, 'getBlog'])->name('pageBlog');
// Route::get('/page/user/{id}', [PageController::class, 'getUser'])->name('pageUser');

// We can also write combined for all the routes of one controller

Route::controller(PageController::class)->group(function (){
    Route::get('/page/home', 'getHome')->name('pageHome');
    Route::get('/page/blog', 'getBlog')->name('pageBlog');
    Route::get('/page/user/{id}', 'getUser')->name('pageUser');
});




// call single action controller

Route::get('/singleAction', SingleActionController::class);




// get id in parameter
// Route::get('/register/{id?}', function(string $id = null){
//     if($id == null){
//         return "<h1>Id not found</h1>";
//     }else{
//         return '<h1>Id = '. $id .'</h1>';
//     }
// });

// Route::get('/register/{id?}', function(string $id){
//     return '<h1>Id = '. $id .'</h1>';
// })->whereNumber('id');  // it will allow only numeric value as a parameter 
// ->wherAplha('id');
// ->whereAplhaNumeric('id');