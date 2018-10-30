<div class="row justify-content-center">
    <div class="col">
        <div class="panel-heading">Anime hinzufügen</div>
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
                <div class="panel panel-default">

                    <div class="panel-body">
                        {{Form::open(array('url' => '/anime/store/', 'id' => 'genericModal', 'method'=>'POST'))}}
                        <div class="form-group">
                            {{Form::label('name', 'Name des Animes')}}
                            {{Form::text('name', null, ['class' => 'form-control'])}}
                        </div>
                        {{--<div class="form-group">--}}
                        {{--{{Form::label('quelle', 'Bezugsquelle')}}--}}
                        {{--{{Form::text('quelle', null, ['class' => 'form-control'])}}--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                        {{--{{Form::label('year', 'Erscheinungsjahr')}}--}}
                        {{--{{Form::text('year', null, ['class' => 'form-control'])}}--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                        {{--{{Form::label('status', 'Status')}}--}}
                        {{--{{Form::select('status', ['ongoing' => 'ongoing', 'abgeschlossen' => 'abgeschlossen'], ['class' => 'form-control'])}}--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                        {{--{{Form::label('studio', 'Studio')}}--}}
                        {{--{{Form::text('studio', null, ['class' => 'form-control'])}}--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                        {{--{{Form::label('folgen_gesamt', 'Gesamtanzahl Folgen')}}--}}
                        {{--{{Form::text('folgen_gesamt', null, ['class' => 'form-control'])}}--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                        {{--{{Form::label('folgen_aktuell', 'Aktuelle Folge')}}--}}
                        {{--{{Form::text('folgen_aktuell', null, ['class' => 'form-control'])}}--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                        {{--{{Form::label('favorite', 'Als Favorit markieren')}}--}}
                        {{--{{Form::checkbox('favorite', 1, ['class' => 'form-control'])}}--}}
                        {{--</div>--}}
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
