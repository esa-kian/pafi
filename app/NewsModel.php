<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    protected $table='News';
	protected $fillable=['id','title','body'];
}
