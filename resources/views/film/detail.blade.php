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
      <p class="card-text">{{$filmdetail->id}}</p>
      <a href="/film" class="btn btn-secondary btn-sm">Back</a>
    </div>
  </div>

  <hr>

  {{-- mengambil compact dari detail film kemudian mengambil model film dengan function kritik --}}
  @forelse ($filmdetail->kritikdetail as $item)
    <div class="card">
      <div class="card-header">
        {{$item->user->name}}
      </div>
      <div class="card-body">
        <h5 class="card-title">Point{{$item->point}}</h5>
        <p class="card-text">{{$item->content}}</p>
      </div>
    </div> 
  @empty
    <h2>belum ada kritik</h2>  
  @endforelse

  <hr>

  {{-- add kritik --}}
  <form action="/kritik" method="post" class="mt-4">
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
      <input type="hidden" value="{{$filmdetail->id}}" name="film_id">
      <textarea name="content" cols="30" rows="10" class="form-control" placeholder="isi kritik">{{old('content')}}</textarea>
    </div>  
    @error('content')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="submit" class="btn btn-primary" value="Post Kritik">
  </form>  



@endsection