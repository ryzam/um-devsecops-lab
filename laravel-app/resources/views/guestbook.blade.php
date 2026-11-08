@extends('layout')
@section('content')
<h1>Buku pelawat</h1>
<form method="post" action="/guestbook">
    <input name="name" placeholder="Nama"> <input name="message" placeholder="Mesej"> <button>Hantar</button>
</form>
<ul>
    @foreach($items as $m)
    <li><b>{!! $m->name !!}</b>: {!! $m->message !!}</li>
    @endforeach
</ul>
@endsection
