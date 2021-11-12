@extends('layout.plantilla')
@section('title','Actualizar')
@section('contenido')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 text-center">Actualizar datos</h1>
        <div class="col mt-4">
            <form action="{{route('personas.update', $personas)}}" method="post">
                @csrf
                @method('put')
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="apellido_paterno">Apellido Paterno</label>
                        <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" placeholder="Apellido Paterno" value="{{$personas->apellido_paterno}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="apellido_materno">Apellido Materno</label>
                        <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" placeholder="Apellido Materno" value="{{$personas->apellido_materno}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{$personas->nombre}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="sexo">Sexo</label>
                        <select id="sexo" class="form-control" name="sexo" value="{{$personas->sexo}}">
                            <option selected>Selecciona el esexo</option>
                            <option>Mujer</option>
                            <option>Hombre</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fecha_nacimiento">Fecha Nacimeinto</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{$personas->fecha_nacimiento}}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>

@endsection