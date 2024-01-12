@extends('layouts.app')

@section('content')

    <div class="banner">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Jumbotron">
    </div>

    <div class="series">
        <div class="container">
            <span><strong>CURRENT SERIES</strong></span>
            <div class="row row-cols-6  py-5 ">
                @foreach ($comics as $comic)
                    <div class="col">
                        <div class="ms_card">
                            <img class="w-100" src="{{ $comic['thumb'] }}" alt="">
                            <h3 class="text-center">{{ $comic['series'] }}</h3>
                        </div>
                    </div>
                @endforeach
                
            </div>
            <div class="btn">
                <a href=""><strong>LOAD MORE</strong></a>
            </div>
        </div>
    </div>
    
@endsection



