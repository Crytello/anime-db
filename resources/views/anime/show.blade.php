@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Startseite</a></li>
                    <li class="breadcrumb-item"><a href="/anime/index">Anime Sammlung</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$anime->name}}</li>
                </ol>
            </nav>
        </div>


            <div><i class="fas fa-trash"></i></div>
        <div class="row">
            <div id="leftSideOfAnimeShow" class="col">
                <p>PLACEHOLDER BILD</p>
                <p>PLACEHOLDER BEWERTUNG</p>
            </div>
            <div id="middleSideOfAnimeShow" class="col">

            </div>
            <div id="rightSideOfAnimeShow" class="col">
                <p>Folgen: {{$anime->folgen_aktuell}}&nbsp;/&nbsp;{{$anime->folgen_gesamt}}</p>
                <p>Quelle: {{$anime->quelle}}</p>
            </div>
        </div>
        {{--<div class="panel-body">
            <table class="table table-striped table-bordered table-list">
                <thead>
                <tr>
                    <th><em class="fa fa-cog"></em></th>
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
                    <tr>
                        <td align="center">
                            <a class="btn btn-default" href="/anime/edit/{{$anime->id}}"><em class="fa fa-pencil"></em></a>
                            <a class="btn btn-danger" data-toggle="modal" data-target="#deleteAnimeModal"><em class="fa fa-trash"></em>
                            </a>
                        </td>
                        <td>{{$anime->name}}</td>
                        <td>{{$anime->quelle}}</td>
                        <td>{{$anime->p_year}}</td>
                        <td>{{$anime->studio}}</td>
                        <td>{{$anime->status}}</td>
                        <td>{{$anime->folgen_gesamt}}</td>
                        <td>{{$anime->folgen_aktuell}}</td>
                        <td>{{$anime->favorite}}</td>
                    </tr>
                </tbody>
            </table>

        </div>--}}
        <div class="row">
            <div class="col-xs-4">
                <a href="/anime/create">Neuen Anime hinzufügen</a>
            </div>
            <div class="col col-xs-8">
            </div>
        </div>
    </div>
    @include('anime.delete')
@endsection
