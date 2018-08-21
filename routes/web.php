<?php

Route::get('/', 'PostsController@index')->name('home');
# post
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
# comment
Route::post('/posts/{post}/comments', 'CommentsController@store');
# tags
Route::get('/posts/tags/{$tag}', 'TagsController@index');

#users routes
# Route::get('/register', 'AuthController@register');
# Route::get('/login', 'AuthController@login');
Route::get('/register', 'RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

//dd(resolve('App\Billing\Stripe'));
// Controller => PosrsController
// Eloquent model => Post
// migration => create_post_table

?>