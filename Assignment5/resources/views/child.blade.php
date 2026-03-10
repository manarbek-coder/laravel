@extends('parent')

@section('title', 'Welcome Page')

@section('content')

<h1>Hello</h1>

@php
    $name = "Manarbek";
@endphp

@if($name)
    <p>Hello, {{ $name }}</p>
@else
    <p>Hello guest</p>
@endif

@for($i = 1; $i <= 3; $i++)
    <p>UCL {{ $i }}</p>
@endfor

@endsection