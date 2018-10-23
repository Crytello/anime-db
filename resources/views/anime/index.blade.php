@extends('layouts.layout')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Startseite</a></li>
                <li class="breadcrumb-item active" aria-current="page">Anime Sammlung</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col">
                <div class="panel">
                    &nbsp;<a class="btn btn-primary" href="/anime/create"><i class="fas fa-plus"></i>&nbsp;Neuen Anime hinzufügen</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <div class="panel panel-default panel-table">
                    <h3 class="panel-title">Animes</h3>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                            <tr>
                                <th><i class="fas fa-layer-group"></i></th>
                                <th></th>
                                <th>Name</th>
                                <th>Quelle</th>
                                <th>Erscheinungsjahr</th>
                                <th>Studio</th>
                                <th>Status</th>
                                <th>Gesamtzahl Folgen</th>
                                <th>Aktuelle Folge</th>
                                <th>Favorit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($animes as $anime)
                                <tr>
                                    <td><a href="/watchlist/check/{{ Auth::user()->id }}/{{$anime->id}}">W</a></td>
                                    <td align="center">
                                        <a class="btn btn-primary" href="/anime/edit/{{$anime->id}}"><i class="fas fa-pen"></i></a>
                                        <a class="btn btn" data-toggle="modal" data-target="#deleteAnimeModal"><em class="fa fa-trash"></em>
                                        </a>
                                    </td>
                                    <td> <a href="/anime/show/{{$anime->id}}">{{$anime->name}}</a> </td>
                                    <td>{{$anime->quelle}}</td>
                                    <td>{{$anime->p_year}}</td>
                                    <td>{{$anime->studio}}</td>
                                    <td>{{$anime->status}}</td>
                                    <td>{{$anime->folgen_gesamt}}</td>
                                    <td>{{$anime->folgen_aktuell}}</td>
                                    <td>{{$anime->favorite}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col col-xs-4">
                            </div>
                            <div class="col col-xs-8">
                                {{$animes->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('anime.delete')
@endsection
