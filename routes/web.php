<?php


use Illuminate\Support\Facades\Route;


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


Route::get('todos','todoscontroller@index');
Route::get('todos/{user}','todoscontroller@show');
Route::get('new-todos','todoscontroller@create');
Route::post('todos-store','todoscontroller@store');

Route::get('todos/{user}/edit','todoscontroller@edit');
Route::post('todos/{user}/update','todoscontroller@update');

Route::get('todos/{user}/delete','todoscontroller@destroy');