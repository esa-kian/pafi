<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilmsModel extends Model
{
	protected $table='Films';
	protected $fillable=['idFilm','titleFilm', 'img' ,'idDir','idWri','idArt','idCin','avg','count','year','comment','Genre'];
        
        function arts(){
            return $this->belongsToMany('App\ArtsModel','idFilm');
        }
        function dirs(){
            return $this->belongsToMany('App\DirsModel','idFilm');
        }
        function wris(){
            return $this->belongsToMany('App\WrisModel','idFilm');
        }
        function cins(){
            return $this->belongsToMany('App\CinsModel','idFilm');
        }
}
