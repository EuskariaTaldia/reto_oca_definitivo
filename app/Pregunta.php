<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    // Nombre tabla
    protected $table = 'preguntas';

    // Primary key de la tabla
    protected $primaryKey = 'codPregunta';

    protected $foreignKey = "codMujer";


    // Relaciones
    public function mujer() {
        return $this->hasOne('App\Mujer', 'id' , 'codMujer');
    }

}
