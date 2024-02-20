<?php

use Illuminate\Support\Facades\Route;

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

//basic routing

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'hello world';
});

Route::get('/world', function () {
    return 'world';
});

Route::get('/', function () {
    return 'selamat datang';
});

Route::get('/about', function () {
    return ' nim :2241720028 ikhwandi';
});


//route parameters

Route::get('/user/{name}', function ($name) {
    return 'Nama Saya '.$name;
});


Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articels/{id}', function 
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});


Route::get('/artikel/{id}', function ($artikelId) {
    return 'Halaman artikel dengan ID '.$artikelId;
});


//optional parameters

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama Saya '.$name;
});

Route::get('/user/{name?}', function ($name='john') {
    return 'Nama Saya '.$name;
});

Route::get('/user/profile', function () {
    //
})->name('profile');



