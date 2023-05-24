@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-5">
        @foreach ($movies as $movie)
            <div class="col">
                <div class="card">
                    <img src="{{$movie->image}} " class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <p class="card-text">{{$movie->vote}}</p>
                    <p class="card-text">{{$movie->nationality}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection