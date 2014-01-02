@extends('layout')
@section('content')
<h1>Showing {{ $user->name }}</h1>

<div class="jumbotron text-center">
    <h2>{{ $user->name }}</h2>
    <p>
        <strong>Email:</strong> {{ $user->email }}<br>
        <strong>Address:</strong> {{ $user->address }}
    </p>
</div>
@stop
