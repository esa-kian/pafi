<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CinsModel extends Model
{
    //
    protected $table='Cins';
    protected $fillable=['idCin','idFilm','nameCin','img','address','count','avg','year'];
    function films(){
        return $this->belongsToMany('App\FilmsModel','idCin');
    }
}
