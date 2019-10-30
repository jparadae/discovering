@extends('layout')

@section('content')
  <h1>Home</h1>
  
  @if($noticias)
     @foreach($noticias as $noticia)
      <li>{{ $noticia['Noticia'] }}</li>
     @endforeach
  @else
   <p>No Hay Noticias de Momento!</p>
  @endif 
@endsection