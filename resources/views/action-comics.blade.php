@extends('layouts/main-layout')

@section('content')
    <main>
        <div class="container d-flex gap-3">
            <img id="comic-image" src="{{ $comic['thumb'] }}" alt="">

            <div id="comic-description">
                <strong>{{ $comic['title'] }}</strong>
                <p>U.S. Price: {{ $comic['price'] }}</p>
                <p>{{ $comic['description'] }}</p>
            </div>
        </div>
    </main>
@endsection
