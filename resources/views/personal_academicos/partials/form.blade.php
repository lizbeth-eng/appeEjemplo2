@csrf
<div class="row">
    <div class="col-12">
        <div class="form-group">
        <label for="">Nombre</label>
        <input type="text"  class="form-control" name="nombre" value="{{(isset($personal_academico))?$personal_academico->nombre:old('nombre')}}" required>
        </div>
     </div>
     <div class="col-12">
        <div class="form-group">
        <label for="">Apellido Paterno</label>
        <input type="text"  class="form-control" name="apellidoPaterno" value="{{(isset($personal_academico))?$personal_academico->apellidoPaterno:old('apellidoPaterno')}}" required>
        </div>
        </div>
        <div class="col-12">
        <div class="form-group">
        <label for="">Apellido Materno</label>
        <input type="text"  class="form-control" name="apellidoMaterno" value="{{(isset($personal_academico))?$personal_academico->apellidoMaterno:old('apellidoMaterno')}}" required>
        </div>
        <div class="col-12">
        <div class="form-group">
        <label for="">Cargo academico</label>
        <input type="text"  class="form-control" name="apellidoMaterno" value="{{(isset($personal_academico))?$personal_academico->cargoAcademico:old('cargoAcademico')}}" required>
        </div>
        <div class="col-12">
        <div class="form-group">
        <label for="">Departamento</label>
        <input type="text"  class="form-control" name="departamento" value="{{(isset($personal_academico))?$personal_academico->departamento:old('departamento')}}" required>
        </div>
        </div>
        </div>