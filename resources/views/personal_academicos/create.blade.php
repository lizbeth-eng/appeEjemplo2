@extends('layouts.app')
@section('content')
<div  class="card mt-3">
    <div class="card-header d-inline-flex">
    <h5>Formulario crear Personal Academico</h5>
     <a href="{{route('personal_academicos.index')}}" class="btn btn-primary ml-auto">
        <i class="fas fa-arrow-left"></i>
     Volver
     </a>
    </div>
    <div class="card-body"></div>
    <form action="{{route('personal_academicos.store')}}" method="POST" enctype="multipart/form-data" id="create">
    @include('personal_academicos.partials.form')
     </form>
    <div calss="card-footer">
        <button class="btn btn-primary" form="create">
        <i class="fas fa-plus"></i>
        Crear 
      </button>
    </div>
</div>
@endsection 