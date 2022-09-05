@extends('layout.master')
@section('judul')
Add Film
@endsection
@section('content')

<form action="/add_action_film" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label>Judul</label>
    <input type="text" name="judul" class="form-control" placeholder="Judul">
  </div>
  @error('judul')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <div class="form-group">
    <label>Ringkasan</label>
    <input type="text" name="ringkasan" class="form-control" placeholder="Ringkasan">
  </div>
  @error('ringkasan')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <div class="form-group">
    <label>Tahun</label>
    <textarea type="number" name="tahun" class="form-control" placeholder="Tahun"></textarea>
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
          <option value="{{$item->id}}">{{$item->nama}}</option> 
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

