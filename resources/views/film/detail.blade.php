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
      <p class="card-text">{{$filmdetail->genre_id}}</p>
      <a href="/film" class="btn btn-secondary btn-sm">Back</a>
    </div>
  </div>



@endsection