<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use App\PaymentGateway\Payment;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/{local}', function($locale){
//     App::setLocale($locale);
//     return view('welcome');
// });

Route::get('/', [ProductController::class, 'index'])->name('product.index');

Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/posts', [ClientController::class, 'getAllPost'])->name('posts.getAllPost');

Route::get('/posts/{id}', [ClientController::class, 'getPostById'])->name('posts.getAllPost');

Route::get('/add-post', [ClientController::class, 'addPost'])->name('posts.addpost');

Route::get('/update-post', [ClientController::class, 'updatePost'])->name('posts.update');

Route::get('/delete-post/{id}', [ClientController::class, 'deletePost'])->name('posts.delete');

Route::get('/fluent-string', [FluentController::class, 'index'])->name('fluent.index');

Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('checkuser');

Route::post('login', [LoginController::class, 'loginSubmit'])->name('login.submit');

Route::get('/session/get', [SessionController::class, 'getSessionData'])->name('session.get');

Route::get('/session/set', [SessionController::class, 'storeSessionData'])->name('session.store');

Route::get('/session/remove', [SessionController::class, 'deleteSessionData'])->name('session.delete');

Route::get('/posts', [PostController::class, 'getAllPost'])->name('post.getAllPost');

Route::get('/add-post', [PostController::class, 'addPost'])->name('post.add');

Route::post('add-post',[PostController::class, 'addPostSubmit'])->name('post.addSubmit');

Route::get('/posts/{id}', [PostController::class, 'getPostById'])->name('post.getById');

Route::get('/delete-post/{id}', [PostController::class, 'deletePost'])->name('post.deleteById');

Route::get('/edit-post/{id}', [PostController::class, 'editPost'])->name('post.edit');

Route::post('/update-post', [PostController::class, 'updatePost'])->name('post.update');

Route::get('/inner-join', [PostController::class, 'innerJoinClause'])->name('posts.innerjoin');

Route::get('/left-join', [PostController::class, 'leftJoinClause'])->name('posts.leftjoin');

Route::get('/right-join', [PostController::class, 'rightJoinClause'])->name('posts.rightjoin');

Route::get('/all-posts', [PostController::class, 'getAllPostUsingModel'])->name('post.getallpostusingmodel');

Route::get('/test', function(){
    return view('test');
});

Route::get('/index', function(){
    return view('index');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/users', [PaginationController::class, 'allUser']);

Route::get('/upload', [UploadController::class, 'uploadForm']);

Route::post('/upload', [UploadController::class, 'uploadFile'])->name('upload.uploadFile');

Route::get('payment', function(){
    return Payment::process();
});

Route::get('/send-email', [MailController::class, 'sendEmail']);