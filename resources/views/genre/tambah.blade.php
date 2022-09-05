@extends('layout.master')
@section('judul')
Add Genre
@endsection
@section('content')

<form action="/add_action_genre" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" placeholder="Nama">
  </div>
  @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection

