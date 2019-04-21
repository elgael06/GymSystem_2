<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table = 'clientes';

    protected $fillable =[
        'nombre',
        'ciudad',
        'calle',
        'telefono',
        'foto',
        'huella',
        'email',
        'detalles',
        'estatus'];
}
