@extends('layout.master')
@section('judul')
Detail Film
@endsection
@section('content')
<div class="card">
    <img src="{{asset('image/'. $filmdetail->poster)}}" alt="Card image cap">
    <div class="card-body">
      <h2> {{$filmdetail->judul}} </h2>
      <p class="card-text">{{$filmdetail->ringkasan}}</p>
      <p class="card-text">{{$filmdetail->tahun}}</p>
      <p class="card-text">{{$filmdetail->genre->nama}}</p>
      <a href="/film" class="btn btn-secondary btn-sm">Back</a>
    </div>
  </div>

  {{-- add kritik --}}
  <form action="" method="post">
    @csrf
    <div class="form-group">
        <select name="point" class="form-control" id="">
          <option value="">--Pilih point yang diberikan--</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
    </div>
    @error('point')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <textarea name="content" cols="30" rows="10" class="form-control" placeholder="isi kritik">{{old('content')}}</textarea>
    </div>  
    @error('content')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </form>  



@endsection