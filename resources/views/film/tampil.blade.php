@extends('layout.master')
@section('judul')
Add film
@endsection

@section('content')
<a href="/film/create" class="btn btn-primary btn-sm my-2">Add film</a>

<div class="row">
@forelse ($film as $item)
<div class="col-4">
<div class="card">
  <img src="{{asset('image/'. $item->poster)}}" alt="Card image cap">
  <div class="card-body">
    <h2> {{$item->judul}} </h2>
    <p class="card-text">{{$item->ringkasan}}</p>
    <p class="card-text">{{$item->tahun}}</p>
    <a href="/film/{{$item->id}}" class="btn btn-primary">read more</a>
    <a href="/film/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>  
    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
  </div>
</div>
</div>
@empty
    <h2>Tidak ada film di genre ini</h2>
@endforelse
</div>

@endsection