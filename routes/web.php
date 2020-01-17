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
    return view('welcome');
	
})->name('home');

Route::get('/user/{id}', function ($id) {
    
	return 'Hello '.$id.' ! How are you ?';
});

 
Route:: post('/signup',[
    'uses' => 'UserController@postSignUp',
    'as' => 'signup'
    ]);

Route:: post('/signin',[
    'uses' => 'UserController@postSignIn',
    'as' => 'signin'
    ]);

Route::get('/logout',[
    'uses' => 'UserController@getLogout',
    'as' => 'logout'
]);
     

Route::get('/dashboard', [
    'uses' => 'PostController@getDashboard',
    'as' => 'dashboard',
    'middleware' => 'auth'
]);


Route::post('/createpost', [
    'uses'=> 'PostController@postCreatePost',
    'as' => 'post.create',
    'middleware' => 'auth'
]);

Route::get('/search', [
    'uses' => 'SearchController@getResults',
    'as' => 'search.results',
    'middleware' => 'auth'
]);

Route::get('/delete-post/{post_id}', [
    'uses'=> 'PostController@getDeletePost',
    'as' => 'post.delete',
    'middleware' => 'auth'
]);

Route::post('/edit', [
    'uses'=> 'PostController@postEditPost',
    'as' => 'edit'
]);

Route::post('/like',[
    'uses' => 'PostController@postLikePost',
    'as' => 'like'
]);

Route::get('/friends', [
    'uses' => 'FriendsController@getResults',
    'as' => 'user.friends',
    'middleware' => 'auth'
]);

Route::get('/requests', [
    'uses' => 'RequestsController@getResults',
    'as' => 'user.requests',
    'middleware' => 'auth'
]);

Route::get('/following/{id}', 'FollowingController@following')->name('following');
?>