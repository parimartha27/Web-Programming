@extends('template/main')

@section('title', 'detailpublisher')

@section('content')

<div style="width:80vw" class="container-fluid d-flex flex-column justify-content-between">
    <div class="bg-secondary d-flex flex-column gap-3 p-3">
       <h2 class="text-white">{{$detailpublisher->name}}</h2>
       <h2 class="text-white">Address - {{$detailpublisher->address}}</h2>
       <h2 class="text-white">Phone - {{$detailpublisher->phone}}</h2>
       <h2 class="text-white">Email - {{$detailpublisher->email}}</h2>
    </div>

    <div class="d-flex flex-row flex-wrap justify-space-evenly gap-2">
        @foreach ($buku as $buku )
        <div class="card" style="width: 17rem;">
            <img src="{{$buku->cover}}" class="card-img-top" alt="Cover Buku">
            <div class="card-body">
                <h5 class="card-title">{{$buku->title}}</h5>
                <p>by</p>
                <p class="card-text">{{$buku->author}}</p>
                <a href="{{route('detailbook', $buku->id)}}" class="btn btn-primary">Detail</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection