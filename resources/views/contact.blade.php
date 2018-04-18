@extends('layouts.app')

@section('content')
<p></p>
  <h1>Kontakt</h1>
  {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
      {{Form::label('name', 'Imię:')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Wpisz swoje imię'])}}
    </div>
    <div class="form-group">
      {{Form::label('email', 'E-Mail:')}}
      {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
    </div>
    <div class="form-group">
      {{Form::label('message', 'Wiadomość:')}}
      {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Tu wpisz wiadomość'])}}
    </div>

    <div>
      {{Form::submit('Wyślij', ['class'=> 'btn btn-primary'])}}
    </div>
  {!! Form::close() !!}
@endsection
