@extends('layouts.app')
@section('content')


<h2>{{$nombre}} </h2>
 <h1>hola soy el archivo vista</h1>
 <p>este es mi encuentro con laravel</p>

 <a href="{{route('ruta.users.create') }}">Crear usuario</a>
 <br>
 <a href="{{route('ruta.users.show') }}">Ver usuario</a>
 <br>
 <a href="{{route('ruta.users.edit') }}">Editar usuario</a>
 <br>
 <a href="{{route('ruta.users.delete') }}">Eliminar usuario</a>
 <br>
 @include('layouts.partecodigo')
 <h5>Estructuras de control</h5>
  @if($valor==0)
     <h3>el valor es 0</h3>
 @elseif($valor>0)
    <h3>el valor es mayor que 0</h3> 
 @else 
    <h3>el valor es: {{$valor}}</h3>
@endif


<hr>
@for($i=0;$i<=10;$i++)
 <h4>cilo {{$i}}</h4>
@endfor

@include('layouts.partecodigo')


@endsection


