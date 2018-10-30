@extends('layouts.layout')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Startseite</a></li>
                <li class="breadcrumb-item"><a href="/anime/index">Anime Sammlung</a></li>
                <li class="breadcrumb-item active" aria-current="page">Anime "{{$anime->name}}" bearbeiten</li>
            </ol>
        </nav>
    </div>
    <div class="container">
        {{ Form::open(array('url' => array('anime/update', $anime->id),'method' => 'put')) }}
        <div class="row">
            <div class="col">
                <img src="/img/placeholder/placeholder.png" width="250px" height="250px" alt="Flowers in Chania">
                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Neues Bild hochladen</button>
                <div id="demo" class="collapse">
                    <div class="form-group">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </div>
            </div>
            <div class="col">
                @if($anime->name)
                    <div class="form-group">
                        {{Form::label('name', 'Name des Animes')}}
                        {{Form::text('name', $anime->name, ['class' => 'form-control'])}}
                    </div>
                @else
                    <div class="form-group">
                        {{Form::label('name', 'Name des Animes')}}
                        {{Form::text('name', null, ['class' => 'form-control'])}}
                    </div>
                @endif
                {{--<div class="form-group">
                    {{Form::label('status', 'Status')}}
                    {{Form::select('status', ['ongoing' => 'ongoing', 'abgeschlossen' => 'abgeschlossen'], ['class' => 'form-control, custom-select'])}}
                </div>--}}
                <select class="custom-select custom-select-md">
                    <option selected disabled>Status bitte auswählen</option>
                    <option value="ongoing">ongoing</option>
                    <option value="abgeschlossen">abgeschlossen</option>
                </select>
                @if($anime->quelle)
                    <div class="form-group">
                        {{Form::label('quelle', 'Bezugsquelle')}}
                        {{Form::text('quelle', $anime->quelle, ['class' => 'form-control'])}}
                    </div>
                @else
                    <div class="form-group">
                        {{Form::label('quelle', 'Bezugsquelle')}}
                        {{Form::text('quelle', null, ['class' => 'form-control'])}}
                    </div>
                @endif
            </div>
            <div class="col">
                @if($anime->favorite == 1)
                    <div class="form-group">
                        {{Form::label('favorite', 'Als Favorit markieren')}}
                        {{Form::checkbox('favorite', 1, ['class' => 'form-control'])}}
                    </div>
                @else
                    <div class="form-group">
                        {{Form::label('favorite', 'Als Favorit markieren')}}
                        {{Form::checkbox('favorite', 0, ['class' => 'form-control'])}}
                    </div>
                @endif
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                @if($anime->comments)
                    <div class="form-group">
                        {{Form::label('comments', 'Beschreibung')}}
                        {{Form::text('comments', $anime->comments, ['class' => 'form-control'])}}
                    </div>
                @else
                    <div class="form-group">
                        {{Form::label('comments', 'Beschreibung')}}
                        {{Form::textarea('comments', null, ['class' => 'form-control'])}}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                @if($anime->folgen_aktuell)
                    <div class="form-group">
                        {{Form::label('folgen_aktuell', 'Aktuelle Folge')}}
                        {{Form::text('folgen_aktuell', $anime->folgen_aktuell, ['class' => 'form-control'])}}
                    </div>
                @else
                    <div class="form-group">
                        {{Form::label('folgen_aktuell', 'Aktuelle Folge')}}
                        {{Form::text('folgen_aktuell', null, ['class' => 'form-control'])}}
                    </div>
                @endif

                @if($anime->folgen_gesamt)
                    <div class="form-group">
                        {{Form::label('folgen_gesamt', 'Gesamtanzahl Folgen')}}
                        {{Form::text('folgen_gesamt', $anime->folgen_gesamt, ['class' => 'form-control'])}}
                    </div>
                @else
                    <div class="form-group">
                        {{Form::label('folgen_gesamt', 'Gesamtanzahl Folgen')}}
                        {{Form::text('folgen_gesamt', null, ['class' => 'form-control'])}}
                    </div>
                @endif
            </div>
            <div class="col">
                @if($anime->p_year)
                    <div class="form-group">
                        {{Form::label('year', 'Erscheinungsjahr')}}
                        {{Form::text('year', $anime->p_year, ['class' => 'form-control'])}}
                    </div>
                @else
                    <div class="form-group">
                        {{Form::label('year', 'Erscheinungsjahr')}}
                        {{Form::text('year', null, ['class' => 'form-control'])}}
                    </div>
                @endif

                @if($anime->studio)
                    <div class="form-group">
                        {{Form::label('studio', 'Studio')}}
                        {{Form::text('studio', $anime->studio, ['class' => 'form-control'])}}
                    </div>
                @else
                    <div class="form-group">
                        {{Form::label('studio', 'Studio')}}
                        {{Form::text('studio', null, ['class' => 'form-control'])}}
                    </div>
                @endif
            </div>
        </div>

        <button type="submit" class="btn btn-default">Abbrechen</button>
        <button type="submit" class="btn btn-default">Speichern</button>
        {{ Form::close() }}
    </div>

@endsection
