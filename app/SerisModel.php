<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SerisModel extends Model
{
	protected $table='Seris';
	protected $fillable=['idSeri','titleSeri','idDir','idWri','idArt','avg','count','year','comment','Genre'];
        function arts(){
            return $this->belongsToMany('App\ArtsModel');
        }
        function dirs(){
            return $this->belongsToMany('App\DirsModel');
        }
        function wris(){
            return $this->belongsToMany('App\WrisModel');
        }
}
