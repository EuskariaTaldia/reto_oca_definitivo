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

<<<<<<< HEAD
=======
    // Columnas que contiene
    protected $fillable = [
        'codUsu', 'nombreMujer', 'fechas', 'codArea', 'subArea', 'datos', 'enlace',
        'codZona', 'zona', 'fotografia', 

    ];
>>>>>>> 343138ee0fd5d2c6e6dda1baee4e830033f8c498

    // Relaciones
    public function usuario() {
        return $this->hasOne('App\User');
    }

    public function zona() {
        return $this->hasOne('App\Zona');
    }

    public function area() {
        return $this->hasOne('App\Area');
    }

}
