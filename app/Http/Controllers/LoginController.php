<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use View;




use App\Http\Requests;

class LoginController extends Controller
{
    
    public function index(Request $request)
    {
        $email = $request->input("email");
        $password = $request->input("password");



        if($email == "fasme")
        {
            return Response::json(array("success"=>"ok"));
            //return redirect()->route('index');
        }
        else
        {
            return Response::json(array("success"=>"fail"));
        }
        
    }

}
