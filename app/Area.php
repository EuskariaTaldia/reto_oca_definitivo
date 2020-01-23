<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    // Nombre tabla
    protected $table = 'areas';

    // Primay key de la tabla
    protected $primaryKey = 'codArea';

    protected $fillable = ['area','area','area_ing','area_eus'];


}
