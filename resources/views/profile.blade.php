@extends('layouts.app')

@section('content')
<p></p>
<p></p>
<img src="/img/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
<h1>Profil użytkownika: {{ $user->name }}</h1>
<form enctype="multipart/form-data" action="/profile" method="POST">
<label>Zaktualizuj zdjęcie profilowe</label>
<input type="file" name="avatar">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit" class="pull-right btn btn-sm btn-primary">

</form>





@endsection
