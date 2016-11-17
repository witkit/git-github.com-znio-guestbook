@extends('master')
@section('content')

    <h3>#{{ $post->id }} - {{ $post->name }} ( {{ $post->email }} )</h3>

    <hr>

    <div class="btn-group pull-right dystans20" role="group">

        <button type="button" class="btn btn-default" role="group">
            <a href="{{ URL::previous() }}" title="Cofnij">
                <span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp;Cofnij
            </a>
        </button>

        @if (Auth::user())

            <button type="button" class="btn btn-default" role="group">
                <a href="{{ action('PagesController@edit', $post->id) }}" title="Edytuj">
                    <span class="glyphicon glyphicon-pencil"></span>&nbsp;Edytuj
                </a>
            </button>

            {!! Form::open([
                    'action' => ['PagesController@destroy', $post->id],
                    'method' => 'delete',
                    'onsubmit' => 'return confirmDelete()',
                    'class' => 'pull-left'
                ])
            !!}

            {!! Form::button('<span class="glyphicon glyphicon-remove"></span>&nbsp;Usuń', [
                    'type' => 'submit',
                    'class' => 'btn btn-default btn-delete',
                    'title' => 'Usuwanie wpisu',
                ])
            !!}

            {!! Form::close() !!}

        @endif

    </div>

    <table class="table table-bordered table-condensed table-striped">

        <tbody>

            <tr>
                <th class="col-xs-2">Imię :</th><td>{{ $post->name }}</td>
            </tr>
            <tr>
                <th>Adres email : </th><td>{{ $post->email }}</td>
            </tr>
            <tr>
                <th>Wiadomość : </th><td>{{ $post->message }}</td>
            </tr>

            @if (Auth::user())

                <tr>
                    <th>Adres IP : </th><td>{{ $post->ip_address }}</td>
                </tr>

            @endif

            <tr>
                <th>Utorzono : </th><td>{{ $post->created_at }}</td>
            </tr>
            <tr>
                <th>Aktualizowano : </th><td>{{ $post->updated_at }}</td>
            </tr>

        </tbody>

    </table>

    <div class="btn-group pull-right dystans20" role="group">

        <button type="button" class="btn btn-default" role="group">
            <a href="{{ URL::previous() }}" title="Cofnij">
                <span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp;Cofnij
            </a>
        </button>

        @if (Auth::user())

            <button type="button" class="btn btn-default" role="group">
                <a href="{{ action('PagesController@edit', $post->id) }}" title="Edytuj">
                    <span class="glyphicon glyphicon-pencil"></span>&nbsp;Edytuj
                </a>
            </button>

            {!! Form::open([
                    'action' => ['PagesController@destroy', $post->id],
                    'method' => 'delete',
                    'onsubmit' => 'return confirmDelete()',
                    'class' => 'pull-left'
                ])
            !!}

            {!! Form::button('<span class="glyphicon glyphicon-remove"></span>&nbsp;Usuń', [
                    'type' => 'submit',
                    'class' => 'btn btn-default btn-delete',
                    'title' => 'Usuwanie wpisu',
                ])
            !!}

            {!! Form::close() !!}

        @endif

    </div>

@stop
