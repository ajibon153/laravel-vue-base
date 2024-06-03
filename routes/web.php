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
    // return view('welcome');
    try {
        DB::connection()->getPdo();
        echo 'Yey, it worked';
    } catch (\Exception $e) {
        die("Could not connect to the database. Please check your configuration. error:" . $e );
    }
});

Route::get('get/about-us/{id}',function(){
    echo 'Hi there this is about page'; 
});

Route::get('test1','TestController@test1');
