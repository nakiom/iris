<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    const ARGENTINA = 1;
    
    protected $table = 'paises';

    protected $fillable = [
        'nombre',
        'nombre_en',
        'iso_alfa2',
        'iso_alfa3',
        'iso_num',
        'tel_prefijo',
        'lenguaje',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
        'nombre_en',
        'iso_alfa2',
        'iso_alfa3',
        'iso_num',
        'tel_prefijo',
        'lenguaje',
    ];

    protected $appends = [
        'emoji'
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

    public function provincias()
    {
        return $this->hasMany(Provincia::class,'pais_id','id');
    }

    public function distritos()
    {
        return $this->hasManyThrough(Distrito::class,Provincia::class,'pais_id','provincia_id');
    }

    /*
    |--------------------------------------------------------------------------
    | Atributos Virtuales
    |--------------------------------------------------------------------------
    |
    | 
    | 
    | 
    |
    */

    public function getEmojiAttribute()
    {
        if ( ! strlen($this->iso_alfa2)) {
            return '';
        }

        return $this->charToRegionalIndicatorSymbol($this->iso_alfa2[0]) . $this->charToRegionalIndicatorSymbol($this->iso_alfa2[1]);
    }

    /*
    |--------------------------------------------------------------------------
    | Helpers
    |--------------------------------------------------------------------------
    |
    | 
    | 
    | 
    |
    */

    protected function charToRegionalIndicatorSymbol($char)
    {
        // A :: 127462
        $int = (ord($char) + 127397);

        return '&#' . $int . ';';
    }
}
