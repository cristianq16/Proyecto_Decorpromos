<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrabajosDestacados;

class destacadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $destacados = TrabajosDestacados::all();
        return view('admin.destacados.destacados', compact('destacados'));
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
        $datos = $request->all();

        $imagenDestacado = $request->file('imagenDestacado')->store('public');

        TrabajosDestacados::create([
            'titulo' => $datos['titulo'],
            'descripcion' => $datos['descripcion'],
            'imagen' => $imagenDestacado
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $destacado = TrabajosDestacados::findOrFail($request->destacado_id);
        if ($request->hasFile('imagen')) {
            $destacado->imagen = $request->file('imagenDestacado')->store('public');
        }else{
        $destacado->update($request->all());

        return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $destacado = TrabajosDestacados::findOrFail($request->delete_id);
        $destacado->delete();
        return back();
    }
}
