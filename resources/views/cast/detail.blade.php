@extends('page')
@section('judul')
Add Cast
@endsection
@section('content')
<p>{{$castdetail->nama}}</p>
<p>{{$castdetail->umur}}</p>
<p>{{$castdetail->bio}}</p>

<a href="/cast" class="btn btn-secondary btn-sm">Back</a>

@endsection