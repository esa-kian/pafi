<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DirsModel extends Model
{
	protected $table='Dirs';
	protected $fillable=['idDir','nameDir', 'img' ,'idFilm','idSeri','avg','count','dateBirth','placeBirth','comment'];
        function films(){
            return $this->belongsToMany('App\FilmsModel');
        }
        function seri(){
            return $this->belongsToMany('App\SerisModel');
        }
}
