@extends('layout')
@section('content')
<h1>Ping {!! $host !!}</h1>
<pre>{!! $output !!}</pre>
@endsection
