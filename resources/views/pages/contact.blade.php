@extends('master')
@section('content')

    <h3>Kontakt</h3>

    <hr>

    {!! Form::open(['action' => ['PagesController@sendMessage'], 'class' => 'form-horizontal']) !!}

    @include('pages.form', [
        'buttonText' => 'Wyślij',
        'placeHolder4Email' => 'Podaj, proszę Swój adres email żebym mógł Ci odpisać.',
        'placeHolder4Message' => 'Napisz do mnie, proszę ...',
    ])

    {!! Form::close() !!}

@stop