<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Usuario::all();
    }

   
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario=new Usuario();
        $usuario->nombre= $request->nombre;
        $usuario->apellido= $request->apellido;
        $usuario->email= $request->email;
        $usuario->contrasena= $request->contrasena;
        $usuario->save();
        return view('usuario.read',['usuario'=>$usuario]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
