@csrf
<div class="row">
    <div class="col-12">
        <div class="form-group">
        <label for="">Nombre</label>
        <input type="text"  class="form-control" name="nombre" value="{{(isset($alumno))?$alumno->nombre:old('nombre')}}" required>
        </div>
     </div>
     <div class="col-12">
        <div class="form-group">
        <label for="">Apellido Paterno</label>
        <input type="text"  class="form-control" name="apellidoPaterno" value="{{(isset($alumno))?$alumno->apellidoPaterno:old('apellidoPaterno')}}" required>
        </div>
        </div>
        <div class="col-12">
        <div class="form-group">
        <label for="">Apellido Materno</label>
        <input type="text"  class="form-control" name="apellidoMaterno" value="{{(isset($alumno))?$alumno->apellidoMaterno:old('apellidoMaterno')}}" required>
        </div>
        <div class="col-12">
        <div class="form-group">
        <label for="">Número Control</label>
        <input type="text"  class="form-control" name="numeroControl" value="{{(isset($alumno))?$alumno->numeroControl:old('numeroControl')}}" required>
        </div>
        <div class="col-12">
        <div class="form-group">
        <label for="">Modalidad</label>
        <input type="text"  class="form-control" name="modalidas" value="{{(isset($alumno))?$alumno->modalidad:old('modalidad')}}" required>
        </div>
        </div>
        </div>