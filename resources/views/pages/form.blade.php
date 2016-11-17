<div class="form-group">
    <div class="col-xs-3">
        {!! Form::label('name', 'Imię: ', ['for' => 'name', 'class' => 'control-label']) !!}
    </div>
    <div class="col-xs-9">
        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name',
            'placeholder' => 'Jak masz na imię ?']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-xs-3">
        {!! Form::label('email', 'Email: ', ['for' => 'email', 'class' => 'control-label']) !!}
    </div>
    <div class="col-xs-9">
        {!! Form::text('email', null, [
                'class' => 'form-control',
                'id' => 'email',
                isset($post)
                    ? 'disabled'
                    : 'placeholder' => isset($placeHolder4Email) ? $placeHolder4Email : 'Jaki jest Twój adress e-mail ?'
            ])
        !!}
    </div>
</div>

<div class="form-group">
    <div class="col-xs-3">
        {!! Form::label('message', 'Wiadomość: ', ['for' => 'message', 'class' => 'control-label']) !!}
    </div>
    <div class="col-xs-9">
        {!! Form::textarea('message', null, [
                'class' => 'form-control',
                'id' => 'message',
                'placeholder' => isset($placeHolder4Message) ? $placeHolder4Message : 'Napisz tutaj coś aby zostawić coś po Sobie.'
            ])
        !!}
    </div>
</div>

<div class="form-group">
    <div class="col-xs-12 text-right">
        {!! Form::submit(isset($buttonText) ? $buttonText : 'Zapisz', ['class' => 'btn btn-default']) !!}
    </div>
</div>