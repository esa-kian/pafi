<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnimsModel extends Model
{
	protected $table='Anims';
	protected $fillable=['idAnim','titleAnim','nameDir','nameWri','nameArt','avg','count','year','comment','Genre'];
    //
}
