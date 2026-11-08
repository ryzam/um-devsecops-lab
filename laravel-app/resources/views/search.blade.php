@extends('layout')
@section('content')
{{-- Sengaja guna {!! !!} (tanpa escape): XSS --}}
<h1>Hasil carian untuk: {!! $q !!}</h1>
@if($error)
<p>Ralat: {!! $error !!}</p>
@endif
<table border="1">
    <tr><th>ID</th><th>Nama</th><th>Harga (RM)</th></tr>
    @foreach($rows as $r)
    <tr><td>{{ $r->id }}</td><td>{!! $r->name !!}</td><td>{{ number_format($r->price, 2) }}</td></tr>
    @endforeach
</table>
@endsection
