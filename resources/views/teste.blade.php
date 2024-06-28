
@extends('layouts.main')

@section('title', 'Página de Testes')

@section('content')

<h1> PÁGINA PRINCIPAL</h1>
@foreach ($events as $event )
  <p>  {{$event -> title}}     -  {{$event -> description}} -  {{$event -> city}}     </p>
@endforeach

@endsection

