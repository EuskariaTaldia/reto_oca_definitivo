<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{

    // Nombre tabla
    protected $table = 'zonas';

    // Primay key de la tabla
    protected $primaryKey = 'codZona';
    
    // Relaciones
    public function mujer() {
        return $this->hasOne('App\Mujer');
    }

}
