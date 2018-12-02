<?php

namespace siscontratista;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table='paises';

    protected $primaryKey='idpaises';

    public $timestamps=false;


    protected $fillable=[
        'nombre'
    ];

    protected $guarded =[

    ];
    
}
