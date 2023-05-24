@extends('template/main')

@section('title', 'categories')

@section('content')


<div class="d-flex flex-column flex-wrap justify-content-between" >
    <div class="container">
        <div class="bg-secondary d-flex p-2">
            <h1 class="fs-1 text-white">
                {{$bookCategory->category}}
            </h1>
        </div>
    </div>

    <div class="d-flex flex-wrap justify-content-center mt-2 mx-auto gap-3" style="width:100vw;">
    @foreach ($kategori as $kategori )
        <div class="card" style="width: 18rem;">
            <img src="{{$kategori->cover}}" class="card-img-top" alt="Cover Buku">
            <div class="card-body">
            <h5 class="card-title">{{$kategori->title}}</h5>
            <p>by</p>
            <p class="card-text">{{$kategori->author}}</p>
            <a href="{{route('detailbook', $kategori->id)}}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    @endforeach
</div>    
</div>

@endsection