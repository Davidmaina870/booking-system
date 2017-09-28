<?php

// Old route for index
Route::get('/', function () {
    return view('welcome');
});

// Admin home page
Route::get('/admin', 'AdminController@index')->name('dashboard');

// Studio related routing
Route::get('/admin/studios', 'StudiosController@index');                // display all studios
Route::get('/admin/studios/create', 'StudiosController@create');        // create studio
Route::post('/admin/studios', 'StudiosController@store');               // submit studio
Route::get('/admin/studios/{studio}', 'StudiosController@studio');      // display specific studio
Route::get('/admin/studios/{studio}/edit', 'StudiosController@edit');   // edit   specific studio
Route::patch('/admin/studios/{studio}', 'StudiosController@update');    // update specific studio
Route::delete('/admin/studios/{studio}', 'StudiosController@delete');   // delete specific studio

// Equipment related routing
Route::get('/admin/equipment', 'EquipmentController@index');                            // dashboard
Route::get('/admin/equipment/create', 'EquipmentController@create');                    // create equipment item
Route::post('/admin/equipment', 'EquipmentController@store');                           // submit equipment item
Route::get('/admin/equipment/{equipment}/edit', 'EquipmentController@edit');            // edit equipment item
Route::patch('/admin/equipment/{equipment}', 'EquipmentController@update');             // update equipment item
Route::delete('/admin/equipment/{equipment}', 'EquipmentController@delete');            // delete equipment item
Route::get('/admin/equipment/{current_category}', 'EquipmentController@category');      // display all equipment items from selected category

Route::get('/admin/equipment/packages/create', 'PackagesController@create');            // create package
Route::post('/admin/equipment/packages', 'PackagesController@store');                   // submit package
Route::get('/admin/equipment/packages/{package}', 'PackagesController@package');        // display package
Route::get('/admin/equipment/packages/{package}/edit', 'PackagesController@edit');      // edit package
Route::patch('/admin/equipment/packages/{package}', 'PackagesController@update');       // update package
Route::delete('/admin/equipment/packages/{package}', 'PackagesController@delete');      // delete package

// User related routing
Route::get('/admin/users', 'UsersController@index');
Route::get('/admin/users/register', 'UsersController@create');
Route::post('/admin/users', 'UsersController@store');

// Login routing
Route::get('/admin/login', 'SessionsController@create');
Route::post('/admin/login', 'SessionsController@store');
Route::get('/admin/logout', 'SessionsController@destroy');


/* structure - basic resource controller

GET     admin/studios           display all studios
GET     admin/studios/{id}      display specific studio
GET     admin/studios/create    create new studio
POST    admin/studios submit    new studio
GET     admin/studios/{id}/edit edit specific studio
PATCH   admin/studios/{id}      update specific studio
DELETE  admin/studios/{id}      delete specific studio

*/
