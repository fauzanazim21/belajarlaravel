@extends('page')
@section('judul')
Add Cast
@endsection
@section('content')
<a href="/cast/create" class="btn btn-primary btn-sm my-2">Add Cast</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Bio</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($cast as $key => $item)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$item->nama}}</td>
          <td>{{$item->umur}}</td>
          <td>{{$item->bio}}</td>
          <td>
            
            <form action="/cast/{{$item->id}}" method="POST">
              @csrf
              @method('delete')
              <a href="/cast/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
              <a href="/cast/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
              <input type="submit" value="Delete" class="btn btn-danger btn-sm">
            </form>
          </td>
        </tr>
    @empty
        <h1>Data Not Found</h1>
    @endforelse
  </tbody>
</table>
@endsection