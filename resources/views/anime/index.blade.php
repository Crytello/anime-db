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
                    <a href="/anime/create"
                       type="button"
                       class="btn btn-primary"
                       data-toggle="modal"
                       data-target="#genericModal">
                        <i class="fas fa-plus">&nbsp;Neuen Anime hinzufügen</i>
                    </a>
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
                                <th>Status<i class="fab fa-amazon"></i></th>
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
                                    <td class="text-centers">
                                        @if($anime->favorite)
                                            <i class="fas fa-heart"></i>
                                        @else
                                            <i class="far fa-heart"></i>
                                        @endif
                                    </td>
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

        <div class="modal" id="genericModal" tabindex="false" data-backdrop="static" data-keyboard="false" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-right: 10px;">&times;</button>
                        <h4 class="modal-title" id="ModalLabel"></h4>
                    </div>
                    {{Form::open(array('action' => 'AnimeController@store', 'id' => 'genericModal', 'method'=>'POST'))}}
                    <div class="modal-body generic-modal-body">
                        <div class="form-group">
                            {{Form::label('name', 'Name des Animes')}}
                            {{Form::text('name', null, ['class' => 'form-control'])}}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" type="button" data-dismiss="modal">Abbrechen</button>
                        <button type="submit" class="btn btn-default">Speichern</button>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>

        <div class="modal" id="genericDeleteModal" data-backdrop="static" data-keyboard="false" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                        <h4 class="modal-title">Neu</h4>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

