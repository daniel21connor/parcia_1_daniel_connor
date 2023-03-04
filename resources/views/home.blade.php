@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <p>principal de umg ingenería en sistemas </p>
@endsection

@section('content')
    <p>enlaces de paginas </p>
    <a href="{{route('pagina2')}}"> Links a pagina 2</a>
    <a href="{{route('pagina1')}}"> Links a pagina 1</a>
@endsection
