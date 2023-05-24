@extends('template/main')

@section('title', 'homepage')

@section('content')

<div class="container">
    <div class="bg-secondary d-flex p-2">
        <h1 class="text-white">
            Book List
        </h1>
    </div>
</div>

<div class="d-flex flex-wrap justify-content-center mt-2 mx-auto gap-3" style="width:100vw;">
@foreach ( $data as $key => $datas )
        <div class="card" style="width: 18rem;">
            <img src="{{$datas->cover}}" class="card-img-top" alt="Cover Buku">
            <div class="card-body">
            <h5 class="card-title">{{$datas->title}}</h5>
            <p>by</p>
            <p class="card-text">{{$datas->author}}</p>
            <a href="{{route('detailbook', $datas->id)}}" class="btn btn-primary">Detail</a>
            </div>
        </div>
@endforeach
</div>


@endsection