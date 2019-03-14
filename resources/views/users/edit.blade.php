@extends('layouts.layout')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Startseite</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nutzerprofil bearbeiten</li>
            </ol>
        </nav>
    </div>
    <div class="container">
        {{ Form::model($user, array('route' => array('profile.update'), 'method' => 'put')) }}
        <div class="row">
            <div class="col-md-6">
                @if($user->username)
                    <div class="form-group">
                        {{Form::label('username', 'Nutzername')}}
                        {{Form::text('username', $user->username, ['class' => 'form-control'])}}
                    </div>
                @else
                    <div class="form-group">
                        {{Form::label('username', 'Nutzername')}}
                        {{Form::text('username', null, ['class' => 'form-control'])}}
                    </div>
                @endif
            </div>
            <div class="col-md-6">
                @if($user->email)
                    <div class="form-group">
                        {{Form::label('email', 'E-Mail-Adresse')}}
                        {{Form::text('email', $user->email, ['class' => 'form-control'])}}
                    </div>
                @else
                    <div class="form-group">
                        {{Form::label('email', 'E-Mail-Adresse')}}
                        {{Form::text('email', null, ['class' => 'form-control'])}}
                    </div>
                @endif
            </div>
        </div>

        <button type="submit" class="btn btn-default">Abbrechen</button>
        <button type="submit" class="btn btn-default">Speichern</button>
        {{ Form::close() }}
    </div>

@endsection
