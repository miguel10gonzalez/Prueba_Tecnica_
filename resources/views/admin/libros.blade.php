@extends('bibliotecas')

@section('content')
 
    <div class="container w-25 border p-4 mt-4">
        <form>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" >
                    </div>
                    <div class="mb-3">
                        <label for="editorial" class="form-label">Editorial</label>
                        <input type="text" class="form-control" id="editorial" >
                    </div>
                    <div class="mb-3">
                        <label for="domicilio" class="form-label">Autor</label>
                        <input type="text" class="form-control" id="domicilio" >
                    </div>
                    <div class="mb-3">
                        <label for="genero" class="form-label">Genero</label>
                        <input type="text" class="form-control" id="genero" >
                    </div>
                    <div class="mb-3">
                        <label for="paginas" class="form-label">Numero de paginas</label>
                        <input type="number" class="form-control" id="paginas" >
                    </div>
                    <div class="mb-3">
                        <label for="año" class="form-label">Año de edicion</label>
                        <input type="date" id="año"> 
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="precio" >
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>

        </form>    


    </div>

@endsection