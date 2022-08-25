<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cast;

class CastController extends Controller
{
    public function create()
    {
      return view('cast.tambah');
    }

    public function store(Request $request)
    {
      $request->validate([
        'nama' => 'required',
        'umur' => 'required',
        'bio' => 'required',
    ]);

    $cast = new cast;

    $cast->nama = $request->nama;
    $cast->umur = $request->umur;
    $cast->bio = $request->bio;


    $cast->save();
    return redirect('/cast');
    
    }

    public function index()
    {
      $cast = cast::all();

      return view ('cast.tampil', compact('cast'));
    }

    public function show($id)
    {
      $castdetail = cast::find($id);

      return view ('cast.detail', compact('castdetail'));
    }

    public function edit($id)
    {
      $castdetail = cast::find($id);

      return view ('cast.edit', compact('castdetail'));
    }

    public function update($id, Request $request)
    {
      $request->validate([
        'nama' => 'required',
        'umur' => 'required',
        'bio' => 'required',
    ]);

      $cast = cast::find($id);

      $cast->nama = $request->nama;
      $cast->umur = $request->umur;
      $cast->bio = $request->bio;

      $cast->save();


      return redirect ('/cast');
    }

    public function destroy($id)
    {
      $cast = cast::find($id)->delete();

      return redirect('/cast');
    }

    
}