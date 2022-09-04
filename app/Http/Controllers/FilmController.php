<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\film;
use App\genre;
use file; 

class FilmController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth')->except('index','show');
    }

    public function create()
    {
      $genre = genre::all();
      return view('film.tambah', compact('genre'));
    }

    public function action(Request $request)
    {
      $request->validate([
        'judul' => 'required',
        'ringkasan' => 'required',
        'tahun' => 'required',
        'poster' => 'required|mimes:jpg,png,jpeg|max:2048',
        'genre_id' => 'required',
    ]);

    $NamaPoster = time().'.'.$request->poster->extension();

    $request->poster->move(public_path('image'), $NamaPoster);

    $film = new film;

    $film->judul = $request->judul;
    $film->ringkasan = $request->ringkasan;
    $film->tahun = $request->tahun;
    $film->poster = $NamaPoster;
    $film->genre_id = $request->genre_id;


    $film->save();
    return redirect('/film');
    
    }

    public function index()
    {
      $film = film::all();
      return view ('film.tampil', compact('film'));
    }

    public function show($id)
    {
      $filmdetail = film::find($id);

      return view ('film.detail', compact('filmdetail'));
    }

    public function edit($id)
    {
      $filmedit = film::find($id);
      $genre = genre::all();


      return view ('film.edit', compact('filmedit','genre'));
    }

    public function update($id, Request $request)
    {
      $request->validate([
        'judul' => 'required',
        'ringkasan' => 'required',
        'tahun' => 'required',
        'genre_id' => 'required',
        'poster' => 'mimes:jpg,png,jpeg|max:2048',
    ]);

      $film = film::find($id);

      if ($request->has('poster')){
        $path = "image/";
        file::delete($path . $film->poster);

        $NamaPoster = time().'.'.$request->poster->extension();

        $request->poster->move(public_path('image'), $NamaPoster);
        
        $film->poster = $NamaPoster;

        $film->save();
      }

      $film->judul = $request->judul;
      $film->ringkasan = $request->ringkasan;
      $film->tahun = $request->tahun;
      $film->genre_id = $request->genre_id;
      
      $film->save();


      return redirect ('/film');
    }

    public function destroy($id)
    {
      $film = film::find($id);

      $path = "image/";
      file::delete($path . $film->poster);

      $film->delete();

      return redirect('/film');
    }

    
}
