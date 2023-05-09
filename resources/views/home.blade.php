@extends('layouts/main-layout')

@section('content')
    <main>
        <div class="container d-flex flex-column align-items-center">
            <ul id="comics-list" class="row g-5">
                @foreach ($comics as $comic)
                    <li class="comic col-2">
                        <img class="comic-img" src="{{ $comic['thumb'] }}" alt="">
                        <span class="comic-title">{{ $comic['series'] }}</span>
                    </li>
                @endforeach
            </ul>

            <button>LOAD MORE</button>
        </div>
    </main>
@endsection
