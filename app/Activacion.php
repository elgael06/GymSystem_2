<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activacion extends Model
{
    //
    protected $table = 'activaciones';

    	
protected $fillable =['id_cliente','id_paquete','fecha_alta','estatus'];
}
