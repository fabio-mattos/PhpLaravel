@extends('layouts.main')

@section('title', 'Pagina Principal')

@section('content')

<div id="search-container" class="col-md-12">
       
  <h1> Busque um Evento<h1>
       <form action="">
            <input type="text" id="serach" name="search" class="form-control" placeholder="Procurar">

       </form>

</div>
 <div id="events-container" class="col-md-12">
    <h2>  Proximos eventos</h2>
    <p> Veja os eventos dos próximos dias</p>
 </div>
   <div id="cards-container" class="row"> 
   <a href="/events/create" class="btn btn-primary"> Criar Evento</a>
      @foreach ($events as $event )
       <div class="card col-md-3">
            <img src="/img/events/{{$event->image}}" alt={{$event->title}}>
            <div class="card-body">
              <p class="card-date">
                    27/06/2024
              </p>
              <h5 class="card-tittle">
                    {{$event->title}}
              </h5>
              <p class="card-participants">
                   x participantes
              </p>
              <a href="/events/{{$event->id}}" class="btn btn-primary"> Saber Mais</a>
            </div>
            
       </div>
      @endforeach 
   
  </div>       

@endsection
