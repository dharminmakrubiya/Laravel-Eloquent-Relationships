<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/posts',function() {

    $posts = \App\Models\Post::get();

    // echo "<pre>";
    // print_r($posts);
    // die();
    // dd($posts);

    return view('posts.index', compact('posts'));

    // \App\Models\Post::create([
    //     'user_id'   =>  1,
    //     'title'     =>  'Post title 1'
    // ]);

    // \App\Models\Post::create([
    //     'user_id'   =>  2,
    //     'title'     =>  'Post title 2'
    // ]);

    // \App\Models\Post::create([
    //     'user_id'   =>  3,
    //     'title'     =>  'Post title 3'
    // ]);
    // \App\Models\Post::create([
    //     'user_id'   =>  4,
    //     'title'     =>  'Post title 4'
    // ]);

    // \App\Models\Post::create([
    //     'user_id'   =>  5,
    //     'title'     =>  'Post title 5'
    // ]);

    // \App\Models\Post::create([
    //     'user_id'   =>  6,
    //     'title'     =>  'Post title 6'
    // ]);    
    // \App\Models\Post::create([
    //     'user_id'   =>  7,
    //     'title'     =>  'Post title 7'
    // ]);

    // \App\Models\Post::create([
    //     'user_id'   =>  8,
    //     'title'     =>  'Post title 8'
    // ]);

    // \App\Models\Post::create([
    //     'user_id'   =>  9,
    //     'title'     =>  'Post title 9'
    // ]);    
    // \App\Models\Post::create([
    //     'user_id'   =>  10,
    //     'title'     =>  'Post title 10'
    // ]);

    // \App\Models\Post::create([
    //     'user_id'   =>  11,
    //     'title'     =>  'Post title 11'
    // ]);

});


Route::get('/users', function () {

    $users = \App\Models\User::get();
    dd($users);
    // $users = \App\Models\User::with('addresses')->get();    
    
    // echo "<pre>";
    // print_r($users[0]->toArray());
    // die();
    // dd($users[0]);
    
    return view('users.index', compact('users'));
});
