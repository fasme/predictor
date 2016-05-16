<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{

	protected $table = "partido";
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
