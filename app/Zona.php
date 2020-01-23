<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    // Nombre tabla
protected $table = 'zona';

// Primay key de la tabla
protected $primaryKey = 'codZona';

protected $fillable = ['Zona','zona_ing','zona_eus'];


 // No necesitamos tener
 public $timestamps = false;

}
