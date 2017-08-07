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
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Route::group(array('prefix'=>'Anims'),function(){
	Route::get('/top100','AnimsController@top100');
	Route::get('/genre','AnimsController@genre');
	Route::get('/alpha','AnimsController@alpha');
	Route::get('/{idAnim}/info','AnimsController@info');

});

Route::group(array('prefix'=>'Arts'),function(){
	Route::get('/top100','ArtsController@top100');
	Route::get('/alpha','ArtsController@alpha');
	Route::get('/{idArt}/info','ArtsController@info');

});

Route::group(array('prefix'=>'Dirs'),function(){
	Route::get('/top100','DirsController@top100');
	Route::get('/alpha','DirsController@alpha');
	Route::get('/{idDir}/info','DirsController@info');

});

Route::group(array('prefix'=>'Docs'),function(){
	Route::get('/top100','DocsController@top100');
	Route::get('/genre','DocsController@genre');
	Route::get('/alpha','DocsController@alpha');
	Route::get('/{idDoc}/info','DocsController@info');

});

Route::group(array('prefix'=>'Films'),function(){
	Route::get('/top100','FilmsController@top100');
	Route::get('/genre','FilmsController@genre');
	Route::get('/alpha','FilmsController@alpha');
	Route::get('/{idFilm}/info','FilmsController@info');

});

Route::group(array('prefix'=>'Seris'),function(){
	Route::get('/top100','SerisController@top100');
	Route::get('/genre','SerisController@genre');
	Route::get('/alpha','SerisController@alpha');
	Route::get('/{idSeri}/info','SerisController@info');

});

Route::group(array('prefix'=>'Wris'),function(){
	Route::get('/top100','WrisController@top100');
	Route::get('/alpha','WrisController@alpha');
	Route::get('/{idWri}/info','WrisController@info');

});

Route::group(array('prefix'=>'Cinemas'),function(){
	Route::get('/top100','CinsController@top100');
	Route::get('/city','CinsController@city');
        Route::get('/alpha','CinsController@alpha');
	Route::get('/{idCin}/info','CinsController@info');

});