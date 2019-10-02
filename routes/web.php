<?php
Route::group(['middleware' => 'checkuser'], 
	function(){
				Route::get('/admin', 'AdminController@dashboard');
				Route::get('/admin/dashboard', 'AdminController@dashboard');

				Route::get('/admin/member', 'AdminController@member');
				Route::post('/admin/member/add', 'AdminController@add_member');
				Route::put('/admin/member/edit', 'AdminController@edit_member');
				Route::delete('/admin/member/delete', 'AdminController@hapus_member');

				Route::get('/admin/event/{id}', 'EventController@event');
				Route::post('/admin/event/add', 'EventController@add_event');
				Route::put('/admin/event/edit', 'EventController@edit_event');
				Route::delete('/admin/event/delete', 'EventController@hapus_event');

				Route::get('/admin/blog/{id}', 'BlogController@blog');
				Route::post('/admin/blog/add', 'BlogController@add_blog');
				Route::put('/admin/blog/edit', 'BlogController@edit_blog');
				Route::delete('/admin/blog/delete', 'BlogController@hapus_blog');


				Route::get('/admin/product/{id}', 'ProductController@product');
				Route::post('/admin/product/add', 'ProductController@add_product');
				Route::put('/admin/product/edit', 'ProductController@edit_product');
				Route::delete('/admin/product/delete', 'ProductController@hapus_product');

				Route::get('/logout', 'LoginController@logout');
			});

Route::get('/', 'HomeController@home');
Route::get('/login', 'LoginController@login');
Route::post('/loginCheck', 'LoginController@loginCheck');




