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


Route::get('/team', ['as' => 'team.index',
                     'uses' => 'TeamController@index']);
Route::get('/team/create', ['as' => 'team.create',
                            'uses' => 'TeamController@create']);
Route::post('/team/store', ['as' => 'team.store',
                            'uses' => 'TeamController@store']);
Route::get('/team/destroy/{id}', ['as' => 'team.destroy',
                             'uses'=> 'TeamController@destroy']);

Route::get('/player/index/{team_id}', ['as' => 'player.index',
                                        'uses' =>'PlayerController@index']);

Route::get('/player/create/{team_id}', ['as' => 'player.create',
                                         'uses' =>'PlayerController@create']);


Route::post('/player/store/{team_id}', ['as' => 'player.store',
                                        'uses' =>'PlayerController@store']);


Route::get('/player/destroy/{id}', ['as' => 'player.destroy',
                                        'uses' =>'PlayerController@destroy']);

