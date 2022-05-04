<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function login(Request $request){

        if($request->method() == 'GET'){
            return view('home.login');
        }

        $request->validate([

            'cellphone' => 'required|iran_mobile'

        ]);
    }

}
