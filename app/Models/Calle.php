<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calle extends Model
{
    protected $table = 'calles';
    
    protected $fillable = [
        'nombre',
        'localidad_id'
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
    
    public function localidad() 
    {
        return $this->belongsTo(Localidad::class,'localidad_id','id');
    }

    public function domicilios()
    {
        return $this->hasMany(Domicilio::class,'calle_id','id');
    }
}
