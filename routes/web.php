<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/posts', function () {
	return view('posts');
	// echo 'This page is being implemented!';
	// echo '</br>';
	// return 'This page should return an introduction along with an index of all posts';
});

Route::get('/projects', function () {
	return view('projects');
	// echo 'This page is being implemented!</br>';
	// return 'This page should return an introduction along with an index of all projects';
});

Route::get('/projects/wot_dis', function () {
	return view('wot_dis');
});

Route::get('/projects/logsite', function () {
	return view('logsite');
});

Route::get('/test', function () {
	return view('test');
});

/*
Route::get('foo', function () {
	return 'Hello World';
});
 */

// Route::redirect('/fee', '/foo', 301);

// Route::permanentRedirect('/foe', '/foo');

// Route::get('user/{id}', 'UserController@show');

/*
Route::get('user/{id}', function ($id) {
	return 'User ID: '.$id;
})->where('id', '[0-9]+');
 */
/*
Route::get('user/{name}', function ($name) {
	return 'User Name: '.$name;
})->where('id', '[a-z]+');

Route::get('user/{id}/{name}', function ($id, $name) {
	echo 'User Name: '.$name;
	echo '</br>';
	return 'User ID: '.$id;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::fallback( function() {
	return 'Error 404: Page Not Found!';
});
 */
/*
Route::any('/', function () {
	return 'Sorry, this page does not exist!';
});
 */
