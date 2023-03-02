@extends('layouts.app')
@section('content')
 <div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h5>Alumnos</h5>
     <a href="{{route('alumnos.create')}}" class="btn btn-primary ml-auto">
        <i class="fas fa-plus"></i>
     Agregar</a>
    </div>
       <div class="card-body">
       <div class="row">
       <div class="col-4">
         <div class="form-group">
         <a class="navbar-brand">Listar</a>
         <select class="custom-select" id="limit" name="limit">
          @foreach([10,20,50,100] as $limit)
           <option value="{{$limit}}" @if(isset($_GET['limit'])) {{($_GET['limit']==$limit)?'selected': ''}}@endif>{{$limit}}</option>
          @endforeach
</select>
<?php
if(isset($_GET['page'])){ 
  $pag=$_GET['page'];
}else{
  $pag=1;
}
if(isset($_GET['limit'])){
  $limite=$_GET['limit'];
}else{
  $limite=10;
}
$comienzo=$limite*($pag-1);

?>

   </div>
 </div>
 <div class="col-8">
   <div class="form-group">
   <a class="navbar-brand">Buscar</a>

   <input class="form-control mr-sm-2" type="search"  id="search" placeholder="Search" aria-label="Search" 
   value="{{(isset($_GET['search']))?$_GET['search']:''}}">
  </div>
</div>

@if($alumnos->total() > 10)
{{$alumnos->links()}}
@endif
       </div>
<div  class="table-responsive">
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>ID</th>
      <th>Nombre</th>
      <th>Apellido Paterno</th>
      <th>Apellido Materno</th>
      <th>Número Control</th>
      <th>Modalidad</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $valor=1;
    if($pag!=1){
      $valor=$comienzo+1;
     }
  ?>
    @foreach($alumnos as $alumno)
    <tr>
      <th scope="row">{{$valor++}}</th>
      <td>{{$alumno->idAlumno}}</td>
      <td>{{$alumno->nombre}}</td>
      <td>{{$alumno->apellidoPaterno}}</td>
      <td>{{$alumno->apellidoMaterno}}</td>
      <td>{{$alumno->numeroControl}}</td>
      <td>{{$alumno->modalidad}}</td>
      <td>

      <div class="btn-group" role="group" aria-label="Basic example">
       <a href="{{route('alumnos.show', $alumno->idAlumno)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
       <a href="{{route('alumnos.edit', $alumno->idAlumno)}}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
       <button type="submit" class="btn btn-danger"
        form="delete_{{$alumno->idAlumno}}"
        onclick="return confirm('¿Estas seguro de eliminar el registro?')">
       <i class="fas fa-trash"></i>
       </button>
       <form action="{{route('alumnos.destroy', $alumno->idAlumno)}}"
       id="delete_{{$alumno->idAlumno}}" method="post" enctype="multipart/form-date"
       hidden>
        @csrf
        @method('DELETE')
       </form>
       </td>
      </div>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
 <div  class="card-footer">
      @if($alumnos->total() > 10)
      {{$alumnos->links()}}
      @endif

 
       </div>

       <!-- JS PARA FILTAR Y BUSCAR MEDIANTE PAGINADO -->
<Script type="text/javascript">
$('#limit').on('change', function(){
    window.location.href="{{ route('alumnos.index')}}?limit=" + $(this).val()+ '&search=' + $('#search').val()
})

$('#search').on('keyup', function(e){
    if(e.keyCode == 13){
        window.location.href="{{ route('alumnos.index')}}?limit=" +$('#limit').val()+'&search='+$(this).val()
    }
})
</Script>
 </div>
@endsection