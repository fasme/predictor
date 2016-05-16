<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{

	protected $table = "equipo";
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
