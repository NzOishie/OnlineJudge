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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('problem/create', function ()
{
    return view('problem/create');
});

Route::post('problem', 'ProblemController@create');
Route::get('problem/{id}', 'ProblemController@show');
Route::get('problems', 'ProblemController@index');
Route::get('/submit',function(){
    return view ('submit/submit');
});

Route::post('/submit','SubmitController@solution');
