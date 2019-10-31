@extends('layout')

@section('content')
  <h1>Contact</h1>
   <form method="POST" action={{ route('contact') }}>
         @csrf
   	<input name="nombre" placeholder="Nombre"><br>
   	<input type="email" name="email" placeholder="Correo"><br>
   	<input type="text" name="content" placeholder="Asunto"><br>
   	<textarea placeholder="Escribe tu mensaje"></textarea><br>
   	<button>Enviar</button>
   </form>
@endsection