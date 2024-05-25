@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row gy-3">
        @foreach($movies as $movie)
        <div class="col-4">
            <div class="card h-100" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <p class="card-text">{{$movie->original_title}}</p>
                    <p class="card-text">{{$movie->nationality}}</p>
                    <p class="card-text">{{$movie->date}}</p>
                    <p class="card-text">{{$movie->vote}}</p>


                </div>
            </div>
        </div>
        @endforeach

    </div>
@endsection