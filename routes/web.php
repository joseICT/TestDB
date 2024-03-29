<?php
use Illuminate\support\Facades\route;
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
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users','DcargosController@list');

Route::get('/users/{id}','DcargosController@show');

Route::get('/vista','TestController@list');

Route::get('/producto','ProductoController@list');


