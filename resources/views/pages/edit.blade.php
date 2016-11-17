@extends('master')
@section('content')

    @include('errors.alert')

    <h3>Edytuj #{{ $post->id }} - {{ $post->name }} ( {{ $post->email }} )</h3>

    <hr>

    {!! Form::model($post, ['method' => 'PATCH', 'route' => ['pages.update', $post->id], 'class' => 'form-horizontal']) !!}

    @include('pages.form')

    {!! Form::close() !!}

@stop