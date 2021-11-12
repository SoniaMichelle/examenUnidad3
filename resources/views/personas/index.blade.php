@extends('layout.plantilla')
@section('title','Lista' )
@section('contenido')
<div class="row">
    <div class="col">
        <button type="button" class="btn btn-primary">
            <a style="color: white;" href="{{route('personas.agregar')}}"><i class="fas fa-user-plus"></i></a>
        </button>
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha Nacimiento</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Actualizar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($persona as $personas)
                <tr>
                    <th scope="row">{{$personas->id}}</th>
                    <th>{{$personas->apellido_paterno}}</th>
                    <th>{{$personas->apellido_materno}}</th>
                    <th>{{$personas->nombre}}</th>
                    <th>{{$personas->fecha_nacimiento}}</th>
                    <th>{{$personas->sexo}}</th>
                    <th><?php
                        $fecha_nacimiento = new DateTime($personas['fecha_nacimiento']);
                        $hoy = new DateTime();
                        $edad = $hoy->diff($fecha_nacimiento);
                        echo $edad->y;
                        ?>
                    </th>
                    <th>
                        <!-- BOTON PARA ACTUALIZAR -->
                        <button type="button" class="btn btn-warning">
                            <a style="color: black;" href="{{route('personas.actualizar', $personas)}}"><i class="fas fa-pen"></i></a>
                        </button>
                    <th>
                        <!-- BOTON ELIMINAR -->
                        <form action="{{route('personas.eliminar',$personas)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-user-slash"></i></button>
                        </form>
                    <th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('pagina')
{{$persona->links()}}
@endsection