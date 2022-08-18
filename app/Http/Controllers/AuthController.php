<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('halaman.register');
    }

    public function welcome(Request $request){
        $namadepan = $request['fname'];
        $namabelakang = $request['lname'];

        return view('halaman.welcome', compact('namadepan', 'namabelakang'));
    }
}
