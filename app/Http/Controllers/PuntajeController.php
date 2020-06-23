<?php

namespace App\Http\Controllers;

use App\Puntaje;
use App\User;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PuntajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $points = DB::select('SELECT tbl_puntajes.id, name, puntaje, id_nivel FROM tbl_puntajes INNER JOIN users ON tbl_puntajes.id_usuario = users.id INNER JOIN tbl_niveles ON tbl_puntajes.id_nivel = tbl_niveles.id;');
        // $portafolio = Usuario::latest("id")->get();
        // return $portafolio;
        return view("welcome", [
            "puntajes"=>$points
        ]);
        // return $puntajes;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view("");
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
