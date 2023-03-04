
@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    <p>bienvenido a pagina 1, mucho gusto</p>
@endsection

@section('content')
    <p>deseas volver a la pagina pricipal</p>
    <a href="{{route('servidor2')}}">Links a pagina principal</a>
@endsection
