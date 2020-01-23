<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
// Nombre tabla
protected $table = 'preguntas';

// Primay key de la tabla
protected $primaryKey = 'codPregun';

protected $fillable = ['resCorre','resFall1','resFall2'];


// Relaciones
public function codmujer() {
    return $this->hasOne('App\mujer' , 'codMujer' , 'codMujer');
}

 // No necesitamos tener
 public $timestamps = false;


}
