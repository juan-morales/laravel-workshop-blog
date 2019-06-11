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
    return redirect(route("posts"));
})->name("main");

/**
 *
 * Definition of a Route
 * <Route>::<METHOD>("<URL>", <clousure or Controller@method>)
 *
 */

Route::get("/posts/{id}/edit", "PostController@edit")->name("posts-edit");

Route::get("/posts/create", "PostController@create")->name("posts-create");

Route::get("/posts/{id}", "PostController@show")->name("posts-show");

Route::get("/posts", "PostController@index")->name("posts");

Route::post("/posts", "PostController@store")->name("posts-store");

Route::patch("/posts/{id}", "PostController@update")->name("posts-update");

Route::delete("/posts/{id}", "PostController@destroy")->name("posts-delete");

Route::post("/comments", "CommentController@store")->name("comments-store");

Auth::routes();

Route::get('/home', function () {
	return redirect(route("main"));
})->name('home');
