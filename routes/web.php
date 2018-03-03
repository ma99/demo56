<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{vue?}', function () {
    return view('test');           // view('pages.admin')
})->where('vue', '[\/\w\.-]*');

Route::get('/main', function()
{
  return view('test');
});