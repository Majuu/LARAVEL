@extends('layouts.app')

@section('content')

<p></p>
<img src="/img/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
<h1>Profil użytkownika: {{ $user->name }}</h1>
<form enctype="multipart/form-data" action="/profile" method="POST">
<label>Zaktualizuj zdjęcie profilowe</label>
<input type="file" name="avatar">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit" class="pull-right btn btn-sm btn-primary">

</form>

<p></p>
<p>Lorem ipsum dolor sit amet,nim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
@endsection
