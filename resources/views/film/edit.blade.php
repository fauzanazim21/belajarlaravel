@extends('layout.master')
@section('judul')
Edit Account
@endsection
@section('content')

<form action="/film/{{$filmedit->id}}" method="POST" enctype="multipart/form-data">
  @csrf
    @method('PUT')
      <div class="form-group">
        <label>Judul</label>
        <input type="text" value="{{$filmedit->judul}}" name="judul" class="form-control" placeholder="Judul">
      </div>
        @error('judul')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      <div class="form-group">
        <label>Ringkasan</label>
        <input type="text" value="{{$filmedit->ringkasan}}" name="ringkasan" class="form-control" placeholder="Ringkasan">
      </div>
        @error('ringkasan')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      <div class="form-group">
        <label>Tahun</label>
        <input type="text" value="{{$filmedit->tahun}}" name="tahun" class="form-control" placeholder="Tahun">
      </div>
        @error('tahun')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
          <label>Poster</label>
          <input type="file" name="poster" class="form-control" id="">
        </div>
        @error('poster')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
          <label>Genre</label>
          <select name="genre_id" id="" class="form-control" >
            <option value="">--Pilih salah satu genre--</option>
            @forelse ($genre as $item)
            @if ($item->id === $filmedit->genre_id)
            <option value="{{$item->id}}" selected>{{$item->nama}}</option> 
            @else
            <option value="{{$item->id}}">{{$item->nama}}</option> 
            @endif
                
            @empty
                <option>tidak ada film</option>
            @endforelse
          </select>
        </div>
        @error('genre_id')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection