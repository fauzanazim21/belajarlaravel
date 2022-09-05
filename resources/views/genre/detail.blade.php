@extends('layout.master')
@section('judul')
Detail Genre
@endsection
@section('content')
<p>{{$genredetail->nama}}</p>

<div class="row">
@forelse ($genredetail->film as $item)
    <div class="col-4">
        <div class="card">
            <img class="card-img-top" src="{{asset('image/'.$item->poster)}}" alt="Card image cap">
            <div class="card-body">
              <h2> {{$item->judul}} </h2>
              <p class="card-text">{{$item->ringkasan}}</p>
              <a href="/film/{{$item->id}}" class="btn btn-primary">read more</a>
            </div>
        </div>
    </div>    
@empty
    <h2>Tidak ada film di genre ini</h2>
@endforelse
</div>

<a href="/genre" class="btn btn-secondary btn-sm">Back</a>

@endsection