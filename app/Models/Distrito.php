<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $table = 'distritos';

    protected $fillable = [
        'nombre',
        'categoria',
        'provincia_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
        'categoria',
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

    public function provincia() 
    {
        return $this->belongsTo(Provincia::class,'provincia_id','id');
    }

    public function localidades()
    {
        return $this->hasMany(Localidad::class,'distrito_id','id');
    }

    public function calles()
    {
        return $this->hasManyThrough(Calle::class,Localidad::class,'distrito_id','localidad_id');
    }
}
