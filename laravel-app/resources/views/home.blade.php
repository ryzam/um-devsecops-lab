@extends('layout')
@section('content')
<h1>Kedai Bengkel</h1>
<ul>
    <li><a href="/search?q=laptop">Cari produk</a></li>
    <li><a href="/guestbook">Buku pelawat</a></li>
    <li><a href="/ping?host=127.0.0.1">Alat ping</a></li>
    <li><a href="/download?file=notis.txt">Muat turun notis</a></li>
    <li><a href="/login">Log masuk</a></li>
    <li><a href="/admin">Admin</a></li>
</ul>
@endsection
