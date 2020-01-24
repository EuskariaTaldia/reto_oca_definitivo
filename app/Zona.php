<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{

    // Nombre tabla
    protected $table = 'zonas';

    // Primay key de la tabla
    protected $primaryKey = 'codZona';
    
<<<<<<< HEAD
=======
    // Columnas que contiene
    protected $fillable = [
        'zona', 'zona_ing', 'zona_eus',
    ];

>>>>>>> 343138ee0fd5d2c6e6dda1baee4e830033f8c498
    // Relaciones
    public function mujer() {
        return $this->hasOne('App\Mujer');
    }

}
