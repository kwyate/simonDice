<?php

namespace App\Http\Controllers;

use App\Puntaje;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $user = Auth::user();
        if($user == null){
            $points = DB::select('SELECT tbl_puntajes.id, name, puntaje, id_nivel FROM tbl_puntajes INNER JOIN users ON tbl_puntajes.id_usuario = users.id INNER JOIN tbl_niveles ON tbl_puntajes.id_nivel = tbl_niveles.id ORDER BY puntaje  DESC LIMIT 5');
        }else{
            $points = DB::select('SELECT tbl_puntajes.id, name, puntaje, id_nivel FROM tbl_puntajes INNER JOIN users ON tbl_puntajes.id_usuario = users.id INNER JOIN tbl_niveles ON tbl_puntajes.id_nivel = tbl_niveles.id WHERE users.id = ? ORDER BY puntaje  DESC LIMIT 5', [auth()->user()->id]);
        }
        return view("welcome", [
            "puntajes"=>$points
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $puntaje = $request->get("nivel") * 10;
        $nivel = $request->get("nivel") ;
        $numPuntaje = intval(DB::select("SELECT max(numPuntaje) FROM tbl_puntajes WHERE  id_usuario = ?", [auth()->user()->id])) + 1;
        Puntaje::create([
            "id_usuario" => auth()->user()->id,
            "puntaje" => $puntaje,
            "id_nivel" => $nivel,
            "numPuntaje" => $numPuntaje
        ]);
        $points = DB::select('SELECT tbl_puntajes.id, name, puntaje, id_nivel FROM tbl_puntajes INNER JOIN users ON tbl_puntajes.id_usuario = users.id INNER JOIN tbl_niveles ON tbl_puntajes.id_nivel = tbl_niveles.id WHERE users.id = ? ', [auth()->user()->id]);
        return view("welcome", [
            "puntajes"=>$points
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
