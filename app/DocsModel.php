<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocsModel extends Model
{
	protected $table='Docs';
	protected $fillable=['idDoc','titleDoc','nameDir','nameWri','nameArt','avg','count','year','comment','Genre'];

}
