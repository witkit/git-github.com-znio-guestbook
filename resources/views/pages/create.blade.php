
    @include('errors.alert')

    @include('pages.success')

    <h3>Utwórz nowy wpis</h3>

    <hr>

    {!! Form::open(['url' => 'pages', 'class' => 'form-horizontal']) !!}

    @include('pages.form')

    {!! Form::close() !!}

