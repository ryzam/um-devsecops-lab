@extends('layout')
@section('content')
<h1>Panel admin</h1>
<table border="1">
    @foreach($users as $u)
    <tr><td>{{ $u->name }}</td><td>{{ $u->email }}</td><td>{{ $u->password }}</td></tr>
    @endforeach
</table>
@endsection
