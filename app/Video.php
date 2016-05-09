<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

	protected $table = "video";
    //  
      protected $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
  
    ];
}
