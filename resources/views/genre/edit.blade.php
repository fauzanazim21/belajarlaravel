@extends('layout.master')
@section('judul')
Edit Genre
@endsection
@section('content')

<form action="/genre/{{$genreedit->id}}" method="POST">
  @csrf
    @method('PUT')
      <div class="form-group">
        <label>Nama</label>
        <input type="text" value="{{$genreedit->nama}}" name="nama" class="form-control" placeholder="Nama">
      </div>
        @error('nama')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection