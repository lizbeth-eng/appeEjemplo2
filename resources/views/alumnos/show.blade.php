@extends('layouts.app')
@section('content')
<div  class="card mt-3">
    <div class="card-header d-inline-flex">
    <h5>Formulario ver Alumnos id: {{$alumno->idAlumno}}</h5>
     <a href="{{route('alumnos.index')}}" class="btn btn-primary ml-auto">
        <i class="fas fa-arrow-left"></i>
     Volver
     </a>
    </div>
    <div class="card-body"></div>
    <form action="{{route('alumnos.store')}}" method="POST" enctype="multipart/form-data" id="create">
    @include('alumnos.partials.form')
     </form>
    <div calss="card-footer">
      
    </div>
</div>
@endsection 