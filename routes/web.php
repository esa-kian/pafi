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

Route::get('/', 'HomeController@index');

Route::get('/about', function () {
    return view('about');
});

Route::group(array('prefix'=>'Anims'),function(){
	Route::any('/top100','AnimsController@top100');
	Route::any('/genre','AnimsController@genre');
	Route::any('/alpha','AnimsController@alpha');
	Route::any('/{idAnim}/info','AnimsController@info');

});

Route::group(array('prefix'=>'Arts'),function(){
	Route::any('/top100','ArtsController@top100');
	Route::any('/alpha','ArtsController@alpha');
	Route::any('/{idArt}/info','ArtsController@info');

});

Route::group(array('prefix'=>'Dirs'),function(){
	Route::any('/top100','DirsController@top100');
	Route::any('/alpha','DirsController@alpha');
	Route::any('/{idDir}/info','DirsController@info');

});

Route::group(array('prefix'=>'Docs'),function(){
	Route::any('/top100','DocsController@top100');
	Route::any('/genre','DocsController@genre');
	Route::any('/alpha','DocsController@alpha');
	Route::any('/{idDoc}/info','DocsController@info');

});

Route::group(array('prefix'=>'Films'),function(){
	Route::any('/top100','FilmsController@top100');
	Route::any('/genre','FilmsController@genre');
	Route::any('/alpha','FilmsController@alpha');
	Route::any('/{idFilm}/info','FilmsController@info');

});

Route::group(array('prefix'=>'Seris'),function(){
	Route::any('/top100','SerisController@top100');
	Route::any('/genre','SerisController@genre');
	Route::any('/alpha','SerisController@alpha');
	Route::any('/{idSeri}/info','SerisController@info');

});

Route::group(array('prefix'=>'Wris'),function(){
	Route::any('/top100','WrisController@top100');
	Route::any('/alpha','WrisController@alpha');
	Route::any('/{idWri}/info','WrisController@info');

});

Route::group(array('prefix'=>'Cinemas'),function(){
	Route::any('/top100','CinsController@top100');
	Route::any('/city','CinsController@city');
    Route::any('/alpha','CinsController@alpha');
	Route::any('/{idCin}/info','CinsController@info');

});
Auth::routes();

Route::group(array('prefix'=>'news'),function(){
	Route::any('/all','NewsController@all');
	Route::any('/{id}','NewsController@show');
	
});
