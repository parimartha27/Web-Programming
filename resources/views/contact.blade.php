@extends('template/main')

@section('title', 'contactpage')

@section('content')

<div style="width:80vw" class="container-fluid">
    <div class="bg-secondary d-flex p-3">
        <h1 class="text-white">
            Contact
        </h1>
    </div>
    <div class=" d-flex flex-column justify-content-between gap-3 p-3">
        <h2>
            Store Address:
        </h2>
        <p>
            Jalan Pembangunan Baru Raya,<br>
            Kompleks Pertokoan Emerald Blok III/2<br>
            Bintaro, Tanggeran Selatan <br>
            Indonesia
        </p>
        <h2>
            Open Daily:
        </h2>
        <p>
            08.00 - 20.00
        </p>

        <h2>
            Contact:
        </h2>
        <p>
            Phone: 021-0889977665
        </p>
        <p>
            Email: happybookstore@happy.com
        </p>
    </div>
</div>

@endsection