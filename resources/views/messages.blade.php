@extends('layouts.app')

@section('content')

@if(Auth::check() && Auth::user()->name == "admin")
<p></p>
<p></p>
<h1>Wiadomości</h1>
  @if(count($messages) > 0)
    @foreach($messages as $message)
      <ul class="list-group">
        <li class="list-group-item">Nazwa: {{$message->name}}</li>
        <li class="list-group-item">E-mail: {{$message->email}}</li>
        <li class="list-group-item">Wiadomość: {{$message->message}}</li>
        <p></p>
      </ul>
    @endforeach
  @endif
@endif

@if(!(Auth::check() && Auth::user()->name == "admin"))
<h1>Tylko dla administratora!</h1>
@endif
@endsection

@section('sidebar')
  @parent
  <p>This is appended to the sidebar</p>
@endsection
