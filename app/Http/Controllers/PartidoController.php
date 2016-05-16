<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use View;




use App\Http\Requests;

class PartidoController extends Controller
{
    
    public function proximosPartidos()
    {
        $partidos =  \App\Partido::all();
        
        
        foreach ($partidos as $key => $value) {
            $equipo1 = \App\Equipo::Where('id_equipo', '=', $value->equipo1)->first();
            $equipo2 = \App\Equipo::Where('id_equipo', '=', $value->equipo2)->first();
            $resultados[] = [
                        "partidi"=>$value,
                        "eq1" =>  $equipo1->nombre,
                        "eq2" =>  $equipo2->nombre
                    ];

            
        }

        return Response::json(array("success"=>"fail", "partido"=>$resultados));
    }
        
}
