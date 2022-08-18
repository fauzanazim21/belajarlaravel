<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
        return view('halaman.home');
    }

    public function datatable(){
        return view('halaman.table');
    }
}
