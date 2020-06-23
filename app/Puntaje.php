<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puntaje extends Model
{
	protected $fillable = ["id_usuario", "puntaje", "id_nivel", "numPuntaje"];
	public $timestamps = false;
    protected $table = "tbl_puntajes";
}
