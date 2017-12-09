<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtsModel extends Model
{
	protected $table='Arts';
	protected $fillable=['idArt','nameArt','img','idFilm','idSeri','avg','count','dateBirth','comment','placeBirth'];
        function films(){
            return $this->belongsToMany('App\FilmsModel','idArt');
        }
        function seri(){
            return $this->belongsToMany('App\SerisModel','idArt');
        }
}
