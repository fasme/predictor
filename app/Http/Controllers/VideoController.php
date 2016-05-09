<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use View;




use App\Http\Requests;

class VideoController extends Controller
{
    //

    public function index()
    {
        return Response::json(\App\Video::get());
    }



    public function store(Request $Request){


    	//return Response::json(array("a"=>true));
    	$e =$Request->input("e");

    	$video = new \App\Video();
    	$video->nombre = "asda";

    	$video->save();


       return Response::json(array('ejale' => true,"e"=>$e));




    }

    public function update(){

    }

    public function destroy($id){

    	\App\Video::destroy($id);
    	return Response::json(array("oli"=>true));

    }
}
