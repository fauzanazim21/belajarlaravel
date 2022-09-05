<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kritik;
use Illuminate\Support\Facades\Auth;

class KritikController extends Controller
{
    public function action(Request $request){
        $request->validate([
            'point' => 'required',
            'content' => 'required',
        ]);
    
          $kritik = new Kritik;

          $userid = Auth::id();
    
          $kritik->point = $request->point;
          $kritik->content = $request->content;
          $kritik->user_id = $userid;
          $kritik->film_id = $request->film_id;
    
          $kritik->save();

          return redirect ('/film/'.$request->film_id);
    }
}
