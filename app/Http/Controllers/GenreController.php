<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;


class GenreController extends Controller
{
  
    public function create()
    {
      return view('genre.tambah');
    }

    public function action(Request $request)
    {
      $request->validate([
        'nama' => 'required',
    ]);

    $genre = new genre;

    $genre->nama = $request->nama;


    $genre->save();
    return redirect('/genre');
    
    }

    public function index()
    {
      $genre = genre::all();
      return view ('genre.tampil', compact('genre'));
    }

    public function show($id)
    {
      $genredetail = genre::find($id);

      return view ('genre.detail', compact('genredetail'));
    }

    public function edit($id)
    {
      $genreedit = genre::find($id);

      return view ('genre.edit', compact('genreedit'));
    }

    public function update($id, Request $request)
    {
      $request->validate([
        'nama' => 'required',
    ]);

      $genre = genre::find($id);

      $genre->nama = $request->nama;

      $genre->save();


      return redirect ('/genre');
    }

    public function destroy($id)
    {
      $genre = genre::find($id)->delete();

      return redirect('/genre');
    }

    
}
