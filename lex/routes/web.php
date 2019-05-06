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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'HomeController@home')->name('home');
//Route::get('/{name}', 'HomeController@home')->name('home');

//user
Route::get('/login', 'HomeController@index');
Route::get('/index', 'HomeController@home_user');
Route::post('/index', 'UserController@data');
Route::get('/userProfile/update', 'UserController@update');
Route::post('/userProfile/update', 'UserController@updatedata');

Route::get('/signup', 'HomeController@signup');
Route::post('/signup', 'CrudController@signup');

Route::get('/cookie', 'HomeController@setCookie');

Route::get('/logout', 'UserController@logout');

//Admin
Route::get('/admin_login', 'HomeController@admin_index');
Route::post('/admin_index', 'AdminController@admin_index');
Route::get('/admin_index', 'AdminController@admin_homepage')->name('aindex');
Route::get('/localuser', 'AdminController@local_user');
Route::get('/delete/{user}', 'AdminController@delete_user');
Route::get('/ShowAllHotel', 'AdminController@showhotel');
Route::get('/ShowAllFlight', 'AdminController@showflight');
Route::get('/ShowGroups', 'AdminController@showgroups');
Route::get('/profile/{name}', 'AdminController@profile_user');
Route::get('/admin_logout', 'AdminController@logout');

//admin_addhotel
Route::get('/addhotel', 'AdminController@addhotel');
Route::post('/addhotel', 'AdminController@addhoteldata');

//admin_addflight
Route::get('/addflight', 'AdminController@addflight');
Route::post('/addflight', 'AdminController@addflightdata');


//admin_edit_delete
Route::get('/edit/hotel/{name}', 'AdminController@edit_hotel');
Route::post('/edit/hotel/{name}', 'AdminController@edit_hotel_data');
Route::get('/delete/hotel/{name}', 'AdminController@delete_hotel');
Route::get('/delete/flight/{id}', 'AdminController@delete_flight');
Route::get('/delete/group/{id}', 'AdminController@delete_group');


//hotel
Route::get('/hotel', 'HomeController@hotel');
Route::get('hotel/{id}', 'ServiceController@hotels');

//hotelbooking
Route::get('hotelbooking/{name}', 'ServiceController@hotelbooking');
Route::post('/hotelbooking', 'ServiceController@hotelbookingdata');
Route::get('/login/{id}', 'ServiceController@hotelindex')->name('hotelindex');
Route::post('/hotelbookdata', 'ServiceController@hotelbookingdata');
Route::get('/hotelhistory', 'ServiceController@hotelhistory');
//Route::get('/edit/hotelinfo/{id}', 'ServiceController@update_hotelinfo');
Route::get('/delete/hotelinfo/{id}', 'ServiceController@delete_hotelinfo');


//flight
Route::get('/flight', 'ServiceController@flight');
Route::post('/flight', 'ServiceController@showflight');
Route::get('flight/{from}/{to}', 'ServiceController@flightbook');
Route::post('/flightbookdata', 'ServiceController@flightbookdata');
Route::get('/flighthistory', 'ServiceController@flighthistory');
Route::get('/delete/flightinfo/{id}', 'ServiceController@delete_flightinfo');

//contract
Route::get('/contract', 'ContractController@contract');
Route::get('/addcontract', 'ContractController@addcontract');
Route::post('/addcontract', 'ContractController@addcontractdata');
Route::get('/contract/{name}', 'ContractController@editcontract');
Route::post('/edit', 'ContractController@editcontractdata');

//about
Route::get('/about', 'AboutController@about');
Route::get('/about/edit', 'AboutController@aboutedit');
Route::post('/about/edit', 'AboutController@abouteditdata');

//group
Route::get('/makeplan/group', 'GroupController@group');
Route::post('/addgroup', 'GroupController@addgroup');
Route::get('/makeplan/history', 'GroupController@makeplanhistory');

//joingroup
Route::get('/makeplan/joingroup', 'GroupController@joingroup');
Route::get('/makeplan/joingroup/join/{id}', 'GroupController@joinpage');
Route::post('/makeplan/joingroup/join/{id}', 'GroupController@join');
//Route::get('/user_data', 'UserController@user_data');




//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

