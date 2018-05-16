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
Route::post('/login/custom', [
    
    
  'uses' => 'LoginController@login',
  'as'   => 'login.custom'
]);




Route::post('/casesummary','Controller@casesummary');
Route::post('/insert2','Controller@insert2');
Route::post('/insertmonitor','Controller@insertmonitor');
Route::POST('/insertgirlsReadmition','Controller@insertgirlsReadmition');
Route::POST('/insertfdgkiichecklist','Controller@insertfdgkiichecklist');
Route::POST('/insertawareness','Controller@insertawareness');

Route::get('/', function () {
   return view('welcome');
   
});

Route::get('/form1', function () {
    return view('form1');
    
});

Route::get('/casesummary', function () {
    return view('casesummary');
    
});

Route::get('/form7', function () {
    return view('form7');
    
});
Route::get('/index', function () {
    return view('index');
    
});
Route::get('/schooldata', function () {
    return view('schooldata');
    
});
Route::get('/new', function () {
    return view('new');
    
});
Route::get('/form', function () {
    return view('form');
    
});
Route::get('/monitoring', function () {
    return view('monitoring');
    
});
Route::get('/session', function () {
    return view('session');
    
});
Route::get('/training', function () {
    return view('training');
    
});
Route::get('/ui', function () {
    return view('ui');
    
});
Route::get('/chart', function () {
    return view('chart');
    
});
Route::get('/awareness', function () {
    return view('awareness');   
});
Route::get('/girlsReadmition', function () {
    return view('girlsReadmition');    
});
Route::get('/fdgkiichecklist', function () {
    return view('fdgkiichecklist');    
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=> 'auth'], function(){

    Route::get('/new', function(){

        return view('new');
    })->name('new');

    Route::get('/awareness', function(){

        return view('awareness');
    })->name('awareness') ;

});
