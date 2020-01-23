<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peticion extends Model
{
    // Nombre tabla
    protected $table = 'peticiones';

    // Primay key de la tabla
    protected $primaryKey = 'codPeti';

    protected $fillable = ['nombreMujer','fechas','codArea','subArea','datos','enlace','codZona','zona','fotografia'];


    // Relaciones
    public function usuario() {
        return $this->hasOne('App\Users');
    }

    public function zona() {
        return $this->hasOne('App\Zona');
    }

    public function area() {
        return $this->hasOne('App\Area');
    }


     // No necesitamos tener
     public $timestamps = false;


}
