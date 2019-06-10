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
    return view('posts');
})->name("main");

/**
 *
 * Definition of a Route
 * <Route>::<METHOD>("<URL>", <clousure or Controller@method>)
 *
 */

Route::get("/posts/{id}/edit", function ($id) {
    return view('edit');
})->name("posts-edit");

Route::get("/posts/create", function () {
    return view('create');
})->name("posts-create");

Route::get("/posts/{id}", function ($id) {
    return view('show');
})->name("posts-show");

Route::get("/posts", function () {
    return view('posts');
})->name("posts");

Route::post("/posts", function () {
    return "POST From posts-store [/posts]";
})->name("posts-store");

Route::patch("/posts/{id}", function ($id) {
    return "PATCH From posts-update [/posts/{$id}]";
})->name("posts-update");

Route::delete("/posts/{id}", function ($id) {
    return "DELETE From posts-delete [/posts/{$id}]";
})->name("posts-delete");

Route::post("/comments", function () {
    return "POST From /comments";
})->name("comments-store");


