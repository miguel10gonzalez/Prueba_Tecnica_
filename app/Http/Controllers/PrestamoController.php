<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prestamo;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate( [
            'identificador_libro' =>'required'
        ]);

        $request->validate( [
            'identificador_usuario' =>'required'
        ]);

        $request->validate( [
            'fecha_salida' =>'required'
        ]);

        $request->validate( [
            'fecha_max' =>'required'
        ]);

        $request->validate( [
            'fecha_devolucion' =>'required'
        ]);

        $prestamo = new prestamo;
        $prestamo->nombre = $request->nombre;
        $prestamo->editorial = $request->editorial;
        $prestamo->autor = $request->autor;
        $prestamo->genero = $request->genero;
        $prestamo->numpaginas = $request->numpaginas;
        $prestamo->año = $request->año;
        $prestamo->precio = $request->precio;
        $prestamo->save();

        return redirect()->route('admin.prestamos')->with('prestamo registrado correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestamo = prestamo::find($id);
        return view('prestamo.show', ['prestamo ' => $prestamo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prestamo = prestamo::find($id);
        $prestamo->id_libro = $request->id_libro;
        $prestamo->editorial = $request->editorial;
        $prestamo->autor = $request->autor;
        $prestamo->genero = $request->genero;
        $prestamo->numpaginas = $request->numpaginas;
        $prestamo->año = $request->año;
        $prestamo->precio = $request->precio;
        $prestamo->save();
 
    
       return redirect()->route('libro')->with('success', 'libro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestamo = prestamo::find('$id');

        return redirect()->route('admin.prestamos')->with('prestamo elinado correctamente');
    }
}
