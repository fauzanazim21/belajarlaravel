@extends('layout.master')
@section('judul')
Edit Account
@endsection
@section('content')

<form action="/cast/{{$castdetail->id}}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label>Nama</label>
    <input type="text" value="{{$castdetail->nama}}" name="nama" class="form-control" placeholder="Nama">
  </div>
  @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <div class="form-group">
    <label>Umur</label>
    <input type="text" value="{{$castdetail->umur}}" name="umur" class="form-control" placeholder="Umur">
  </div>
  @error('umur')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <div class="form-group">
    <label>Bio</label>
    <input type="text" value="{{$castdetail->bio}}" name="bio" class="form-control" placeholder="Bio">
  </div>
  @error('bio')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection