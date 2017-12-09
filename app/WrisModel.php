<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WrisModel extends Model
{
	protected $table='Wris';
	protected $fillable=['idWri','nameWri','img','idFilm','idSeri','avg','count','dateBirth','placeBirth','comment'];
        function films(){
            return $this->belongsToMany('App\FilmsModel');
        }
        function seri(){
            return $this->belongsToMany('App\SerisModel');
        }
}
