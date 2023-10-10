<?php

namespace App\Http\Controllers;

use App\Models\libro;

use Illuminate\Http\Request;

class biblioteca extends Controller
{
    public function store(Request $request){

        $request->validate( [
            'nombre' =>'required'
        ]);

         $request->validate( [
            'editorial' =>'required'
         ]);

         $request->validate( [
            'autor' =>'required'
         ]);

         $request->validate( [
            'genero' =>'required'
         ]);

         $request->validate( [
            'numpaginas' =>'required'
         ]);

         $request->validate( [
            'año' =>'required'
         ]);

         $request->validate( [
            'precio' =>'required'
         ]);


         $libro = new libro;
         $libro->nombre = $request->nombre;
         $libro->editorial = $request->editorial;
         $libro->autor = $request->autor;
         $libro->genero = $request->genero;
         $libro->numpaginas = $request->numpaginas;
         $libro->año = $request->año;
         $libro->precio = $request->precio;
         $libro->save();

         return redirect()->route('Biblioteca')->with('libro agregado correctamente');
    }


    public function show($id){

      $biblioteca = libro::find($id);
      return view('biblioteca.show',  [ 'biblioteca' => $biblioteca]);

    }

    public function update(Request $request , $id){

       $biblioteca = libro::find($id);
       $biblioteca->nombre = $request->nombre;
       $biblioteca->editorial = $request->editorial;
       $biblioteca->autor = $request->autor;
       $biblioteca->genero = $request->genero;
       $biblioteca->numpaginas = $request->numpaginas;
       $biblioteca->año = $request->año;
       $biblioteca->precio = $request->precio;
       $biblioteca->save();

   
      return redirect()->route('libro')->with('success', 'libro actualizado');

    }

    public function destroy ($id){

      $biblioteca = libro::find($id);
      return redirect()->route('libro')->with('success', 'libro eliminado');

    }
}