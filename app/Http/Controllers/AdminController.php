<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
    function index(){
        $usuarios = User::all();
        return view('ejemplo',compact('usuarios'));
    }
    
    function guardarUsuario(Request $request) {
        $usuario = new User();
        $usuario->name = $request->nombre;
        $usuario->username = $request->usuario;
        $usuario->email = $request->correo;
        $usuario->password = bcrypt($request->password);    
        $usuario->save();
        return redirect()->back();
    }

    function eliminarUsuario($id){
        $usuario = User::find($id);
        $usuario->delete();
        return redirect()->back();
    }
    
    function editarUsuario($id){
        $usuario = User::find($id);
        return view('editar',compact('usuario'));
    }
    
    function actualizarUsuario(Request $request, $id){
        $usuario = User::find($id);
        $usuario->name = $request->nombre;
        $usuario->username = $request->usuario;
        $usuario->email = $request->correo;    
        $usuario->save();
        return redirect()->route('ejemplo');
    }
    

}
?>  