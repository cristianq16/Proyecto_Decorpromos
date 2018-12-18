<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index(){
        $usuarios = User::all();
        return view('users.index', compact('usuarios'));
    }

    public function show($id){
        $usuario = User::findOrFail($id);
        return view('users.show', compact('usuario'));
    }

    public function create(){
        
        return view('users.create');
    }

    public function store(){

        $data = request()->all();

        User::create([
            'name' => $data['nombre'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);
    }
}
