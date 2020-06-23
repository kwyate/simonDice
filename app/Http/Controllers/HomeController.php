<?php

namespace App\Http\Controllers;

use App\Pregunta;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       return true;
    }
    public function show($id)
    {
        $user = User::find(1);
        $pregunta = Pregunta::find($id);
        return view("usuarios.show", [
            "usuario"=> $user,
            "pregunta"=> $pregunta
        ]);
    }
}
