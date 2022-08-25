@extends('layout.master')
@section('judul')
Add Account
@endsection
@section('content')

<form action="/tambah" method="POST">
  @csrf
  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" placeholder="Nama">
  </div>
  @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <div class="form-group">
    <label>Umur</label>
    <input type="text" name="umur" class="form-control" placeholder="Umur">
  </div>
  @error('umur')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <div class="form-group">
    <label>Bio</label>
    <input type="text" name="bio" class="form-control" placeholder="Bio">
  </div>
  @error('bio')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection