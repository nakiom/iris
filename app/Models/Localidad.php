<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    const BAHIA_BLANCA = 92;

    protected $table = 'localidades';

    protected $fillable = [
        'nombre',
        'codigo_postal',
        'distrito_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
        'codigo_postal',
        'codigo_area',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relaciones
    |--------------------------------------------------------------------------
    |
    | 
    | 
    | 
    |
    */
    
    public function distrito() 
    {
        return $this->belongsTo(Distrito::class,'distrito_id','id');
    }

    public function calles()
    {
        return $this->hasMany(Calle::class,'localidad_id','id');
    }

    public function domicilios()
    {
        return $this->hasManyThrough(Domicilio::class,Calle::class,'localidad_id','calle_id');
    }
}
