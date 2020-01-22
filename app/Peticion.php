<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peticion extends Model
{
    // Nombre tabla
    protected $table = 'peticiones';

    protected $fillable = ['nombreApellido', 'subArea','area' ,'zona', 'zonaGeografica', 'foto', 'fecha', 'mensaje', 'enlace'];

   // Primay key de la tabla
    protected $primaryKey = 'codPeti';

    // No necesitamos tener
    public $timestamps = false;


}
