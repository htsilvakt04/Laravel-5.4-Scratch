<?php


Route::get('/', "PostController@index")->name("home");

Route::get("posts/create", "PostController@create");
Route::post("posts", "PostController@store");
Route::post("posts/{post}/comments", "CommentsController@store");
Route::get("posts/{post}", "PostController@show");

Route::get("/register", "RegistrationController@create");
Route::post("/register", "RegistrationController@store");
Route::get("/login", "SessionsController@create");
Route::post("/login", "SessionsController@store");
Route::get("/logout", "SessionsController@destroy");


Route::get("posts/tags/{tag}", "TagsController@index");
