<?php

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
    $name = request('name');
    // return 'Hello, world!';
    return view('test', compact('name'));
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        'articles' => App\Article::take(3)->latest('updated_at')->get()
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('articles/{article}', 'ArticlesController@show');

// Route::get('/posts/{post}', function ($post) {
//     $posts = [
//         'first' => 'This is the first',
//         'second' => 'Wow! The second!'
//     ];

//     if (! array_key_exists($post, $posts)) {
//         abort(404, 'Shit. No post found.');
//     }

//     return view('post', [
//         'post' => $posts[$post]
//     ]);
// });

Route::get('posts/{post}', 'PostsController@show');
