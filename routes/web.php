<?php

Route::get('/', 'PostsController@index');
// Route::get('/posts/{post}', 'PostsController@show');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');


// Controller => PosrsController
// Eloquent model => Post
// migration => create_post_table
