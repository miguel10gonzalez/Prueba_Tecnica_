<?php

namespace App\Http\Controllers;

use App\Models\usuario;

use Illuminate\Http\Request;

class biblioteca extends Controller
{
    public function store(Request $request){

        $request->validate( [
            'nombre' =>'required'
        ]);

         $request->validate( [
            'apellidos' =>'required'
         ]);

         $request->validate( [
            'domicilio' =>'required'
         ]);

         $request->validate( [
            'fecha' =>'required'
         ]);


         $usuario = new usuario;
         $usuario->nombre = $request->nombre;
         $usuario->apellidos = $request->apellidos;
         $usuario->domicilio = $request->dimicilio;
         $usuario->fecha = $request->fecha;
         $usuario->save();

         return redirect()->route('Biblioteca')->with('usuario agregado correctamente');
    }


    public function show($id_usuario){

      $biblioteca = usuario::find($id_usuario);
      return view('biblioteca.show',  [ 'biblioteca' => $biblioteca]);

    }

    public function update(Request $request , $id_usuario){

       $biblioteca = usuario::find($id_usuario);
      $biblioteca->nombre = $request->nombre;
      $biblioteca->apellidos = $request->apellidos;
      $biblioteca->domicilio = $request->domicilio;
      $biblioteca->fecha = $request->fecha;
      $biblioteca->save();

   
      return redirect()->route('usuario')->with('success', 'usuario actualizado');

    }

    public function destroy ($id_usuario){

      $biblioteca = usuario::find($id_usuario);
      return redirect()->route('usuario')->with('success', 'usuario eliminado');

    }
}
