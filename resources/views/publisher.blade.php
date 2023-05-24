@extends('template/main')

@section('title', 'publisher')

@section('content')

<div class="d-flex flex-wrap justify-content-center mt-2 mx-auto gap-3" style="width:100vw;">
@foreach ($publisher as $publisher )
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$publisher->name}}</h5>
      <p class="card-text">{{$publisher->phone}}</p>
      <a href="{{route('detailpublisher', $publisher->id)}}" class="btn btn-primary">Detail</a>
    </div>
  </div>
    
@endforeach
</div>


@endsection