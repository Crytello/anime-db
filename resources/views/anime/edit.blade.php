@extends('layouts.layout')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Startseite</a></li>
                <li class="breadcrumb-item"><a href="/anime/index">Anime Sammlung</a></li>
                <li class="breadcrumb-item active" aria-current="page">Anime hinzufügen</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col">
                <div class="panel-heading">Anime bearbeiten</div>
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8">
                        <div class="panel panel-default">

                            <div class="panel-body">
                                {{ Form::open(array('url' => array('anime/update', $anime->id),'method' => 'put')) }}

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

                                <div class="form-group">
                                    {{Form::label('status', 'Status')}}
                                    {{Form::select('status', ['ongoing' => 'ongoing', 'abgeschlossen' => 'abgeschlossen'], ['class' => 'form-control'])}}
                                </div>

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
                                <button type="submit" class="btn btn-default">Abbrechen</button>
                                <button type="submit" class="btn btn-default">Speichern</button>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
