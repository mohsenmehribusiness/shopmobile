<?php

Auth::routes();

Route::get('/','HomeController@index')->name('index');

Route::get('/about','HomeController@about')->name('about');
Route::get('/callme','HomeController@callme')->name('callme');
Route::get('/webmap','HomeController@webmap')->name('webmap');
Route::get('/category/{category}','HomeController@category')->name('category');
Route::get('/company/{company}','HomeController@company')->name('company');
Route::get('/company/','HomeController@company_all')->name('company_all');
Route::POST('/add','HomeController@add')->name('add');
Route::POST('/plus','HomeController@plus')->name('plus');
Route::POST('/min','HomeController@min')->name('min');
Route::POST('/del_cart','HomeController@del_cart')->name('del_cart');
Route::get('/product/{product}','HomeController@product')->name('product');
Route::get('/product/','HomeController@product_all')->name('product_all');
Route::POST('/contact','HomeController@contact')->name('contact');
Route::POST('/cart_end_end','HomeController@cart_end_end')->name('cart_end_end');
Route::get('/cart_end','HomeController@cart_end')->name('cart_end');
Route::get('/cart','HomeController@cart')->name('cart');
Route::POST('/comment','HomeController@comment')->name('comment');
Route::get('/tag/{tag}','HomeController@tag')->name('tag');
Route::get('/compare','HomeController@compare')->name('compare');
Route::POST('/add_compare','HomeController@add_compare')->name('add_compare');
Route::POST('/del_compare','HomeController@del_compare')->name('del_compare');


Route::group(['namespace' => 'Admin' , 'middleware' => ['auth:web' , 'checkAdmin'], 'prefix' => 'admin'],function (){
    Route::resource('/product','ProductController');
    Route::resource('/slide','SlideController');
    Route::resource('/about','AboutController');
    Route::resource('/company','CompanyController');
    Route::resource('/category','CategoryController');
    Route::resource('/user','UserController');
    Route::resource('/comments','CommentController');
    Route::get('/sendweb','CommentController@sendweb')->name('sendweb');
    Route::get('/',function(){return View('admin.index');});
    Route::POST('/comment_del','CommentController@del')->name('admin_comment_del');
    Route::POST('/comment_add','CommentController@add')->name('admin_comment_add');
});