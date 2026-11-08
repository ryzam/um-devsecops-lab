@extends('layout')
@section('content')
<h1>Log masuk</h1>
<form method="post" action="/login">
    <input name="username" placeholder="Nama pengguna"> <input name="password" type="password" placeholder="Kata laluan"> <button>Masuk</button>
</form>
@endsection
