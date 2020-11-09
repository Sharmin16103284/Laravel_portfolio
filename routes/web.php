<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
}); 


//insert data into contact table
Route::get('/','contactController@contact')->name('contact');
Route::post('/insert','contactController@insert')->name('insert');

//view contact data
Route::get('contact/view','contactController@viewdata')->name('viewdata');

//single data view
Route::get('single_view/{contact_id}','contactController@single_view')->name('single_view');

//update data
Route::post('update','contactController@update')->name('update');

//delete sigle data from contact table
Route::get('delete/{delete_id}','contactController@delete')->name('delete');


//admin index blade
Route::get('/admin/index','adminController@index')->name('index');
//admin new message blade
Route::get('/admin/new_message','adminController@new_message')->name('new_message');
//archived message blade
Route::get('/admin/arch_message/','adminController@arch_message')->name('arch_message');