<?php

namespace App\Http\Controllers;
 
use App\Usuarios;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuariosController extends Controller{
    
    public function createUsuario(Request $request){
        $usuario = Usuarios::create($request->all());
        return response()->json($usuario);
    }

    public function updateUsuario(Request $request, $id){
        $usuario = Usuarios::find($id);
        $usuario->dui = $request->input('dui');
        $usuario->nombre = $request->input('nombre');
        $usuario->apellido = $request->input('apellido');
        $usuario->direccion = $request->input('direccion');
        $usuario->save();

        return response()->json($usuario);
    }

    public function deleteUsuario($id){
        $usuario = Usuarios::find($id);
        $usuario->delete();
    }

    public function index(){
        $usuario = Usuarios::all();
        return response()->json($usuario);
    }
}
?>