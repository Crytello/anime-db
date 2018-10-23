@extends('layouts.layout')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Startseite</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-6">
                <h2>{{$allAnimesCounted}} Animes gesamt</h2>
            </div>
            <div class="col-md-6">
                <h2>{{$allAnimesCounted}} Animes werden aktuell geschaut</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <p>Zuletzt hinzugefügt:</p>
                @foreach($latestCreatedAnime as $anime)
                    <div><a href="/anime/show/{{$anime->id}}">{{$anime->name}}</a></div>
                @endforeach
            </div>
            <div class="col-md-6">
                <p>Zuletzt geändert:</p>
                @foreach($latestUpdatedAnime as $anime)
                    <div><a href="/anime/show/{{$anime->id}}">{{$anime->name}}</a></div>
                @endforeach
            </div>
        </div>
        <div class="row justify-content-center">

        </div>
    </div>
@endsection
