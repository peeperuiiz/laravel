<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "Usuarios";

    protected $fillable = [
        "dni", "nombre", "apellidos", "nom_usu", "password"
    ];

    protected $guarded = []; // Contrario a fillable, se setea uno de los dos solo.

    protected $casts = [
        "dni" -> string      // Se le obliga a ser string si o si.
    ];
 
    protected $hidden = ["password"]; // Ocultamos al serializar
}
