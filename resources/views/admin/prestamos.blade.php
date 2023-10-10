@extends('bibliotecas')

@section('content')
 
    <div class="container w-25 border p-4 mt-4">
        <form>

                    <div class="mb-3">
                        <label for="libro" class="form-label">Identificador de libro</label>
                        <input type="number" class="form-control" id="libro" >
                    </div>
                    <div class="mb-3">
                        <label for="usuarioid" class="form-label">Identificador de usuario</label>
                        <input type="number" class="form-control" id="usuarioid" >
                    </div>
                    <div class="mb-3">
                        <label for="salida" class="form-label">Fecha salida</label>
                        <input type="date" id="salida"> 
                    </div>
                    <div class="mb-3">
                        <label for="devolucionmax" class="form-label">Fecha maxima de devolucion</label>
                        <input type="date" id="devolucionmax"> 
                    </div>
                    <div class="mb-3">
                        <label for="devolucion" class="form-label">Fecha devolucion</label>
                        <input type="date" id="devolucion"> 
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>

        </form>    


    </div>

@endsection