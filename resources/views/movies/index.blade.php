
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                            <p class="card-text">Nationality: {{ $movie->nationality }}</p>
                            <p class="card-text">Release Date: {{ $movie->date }}</p>
                            <p class="card-text">Vote: {{ $movie->vote }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
