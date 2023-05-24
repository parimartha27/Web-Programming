@extends('template/main')

@section('title', 'detailbook')

@section('content')


<div class="container">
    <div class="bg-secondary d-flex p-2">
        <h1 class="fs-1 text-white">
            Books Detail
        </h1>
    </div>
</div>

<div class="d-flex flex-wrap justify-content-between mx-auto" style="width:100vh;">
   
    <div class="card" style="width: 50rem; height:80rem;">
        <img src="{{$details->cover}}" class="card-img-top" alt="Cover Buku">
        <div class="card-body">
            <h5 class="card-title">Title: {{$details->title}}</h5>
            <p class="card-text">Author: {{$details->author}}</p>
            <p class="card-text">Publisher: {{$details->name}}</p>
            <p class="card-text">Year: {{$details->year}}</p>
            <p class="card-text">Description:</p>
            <p class="card-text">{{$details->description}}</p>
        </div>
    </div>    
</div>


@endsection