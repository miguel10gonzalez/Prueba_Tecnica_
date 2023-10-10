@extends('bibliotecas')

@section('content')
 
    <div class="container w-25 border p-4 mt-4">
        <form action="{{ route('usuario -> update ',  ['id_usuario' => $biblioteca -> id ]  ) }}" method="POST ">
            @method('PATCH')
            @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre"  value="{{biblioteca -> nombre }}" >
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" value="{{biblioteca -> apellidos }}" >
                    </div>
                    <div class="mb-3">
                        <label for="domicilio" class="form-label">Domicilio</label>
                        <input type="text" class="form-control" id="domicilio" value="{{biblioteca -> dimicilio }}" >
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha de nacimiento</label>
                        <input type="datetime-local" value="2024-07-23T11:00" min="2024-03-23T11:00" max="2024-11-23T11:00" step="3600" id="fecha"value="{{biblioteca -> fecha }}" >
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>


    </div>

@endsection