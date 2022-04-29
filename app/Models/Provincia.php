<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'provincias';

    protected $fillable = [
        'nombre',
        'alias',
        'iso',
        'pais_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
        'iso',
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
    
    public function pais() 
    {
        return $this->belongsTo(Pais::class,'pais_id','id');
    }

    public function distritos()
    {
        return $this->hasMany(Distrito::class,'provincia_id','id');
    }

    public function localidades()
    {
        return $this->hasManyThrough(Localidad::class,Distrito::class,'provincia_id','distrito_id');
    }
}
