@extends('layout.plantilla')
@section('title','Agregar')
@section('contenido')
<div class="card">
    <div class="col">
        <h5 class="card-header text-center">Agregar</h5>
    </div>
    <div class="col">
        <div class="card-body">
            <form action="{{route('personas.store')}}" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="apellido_paterno">Apellido Paterno</label>
                        <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" placeholder="Apellido Paterno">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="apellido_materno">Apellido Materno</label>
                        <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" placeholder="Apellido Materno">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                    </div>
                </div>
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="sexo">Sexo</label>
                        <select id="sexo" class="form-control" name="sexo">
                            <option selected>Selecciona el esexo</option>
                            <option>Mujer</option>
                            <option>Hombre</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fecha_nacimiento">Fecha Nacimeinto</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" >
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" id="btn_agregar">Agregar</button>
            </form>
        </div>
    </div>
</div>
@endsection
<script src="{{asset('js/edad.js')}}"></script>