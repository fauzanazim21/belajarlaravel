<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
        return view('layouts.app');
    }

    public function datatable(){
        return view('halaman.table');
    }
}
