@extends('layout.app')

@section('content')

    <div class="container my-5">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card bg-transparent border-0 my-3">
                        <img class="img-fluidcard-img-top img-comic pointer" src="{{ $comic->thumb }}"
                            alt="{{ $comic->title }}">
                        <p class="my-2 text-uppercase">{{ $comic->title }}</p>
                        <p class="my-2 text-uppercase">{{ $comic->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
