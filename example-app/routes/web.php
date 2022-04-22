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

Route::name('homepage')->get('/', 'App\Http\Controllers\PageController@homepage');

Route::name('project.index')->get('projects', 'App\Http\Controllers\ProjectController@index');
Route::name('project.show')->get('projects/{slug}', 'App\Http\Controllers\ProjectController@show');

Route::name('contributor.index')->get('contributors', 'App\Http\Controllers\ContributorController@index');
Route::name('contributor.show')->get('contributors/{slug}', 'App\Http\Controllers\ContributorController@show');
