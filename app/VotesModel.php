<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VotesModel extends Model
{
	protected $table='votes';
	protected $fillable=['id','idUser','idItem','NameTable'];    
    //
}
