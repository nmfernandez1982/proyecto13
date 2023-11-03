<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NuevaPublicacion extends Model
{
    use HasFactory;
    protected $table= 'publicaciones';


    
    ##metodos de relacion
    public function getTipoPublicacion()
    {
        return $this->belongsTo(
            tipo_publicacion::class,
            'id_tipo_publicacion',
            'id'
            );
    }

    public function getTipoMascota()
    {
        return $this->belongsTo(
            TipoMascota::class,
            'id_tipo_mascota',
            'id'
            );
    }

    public function getProvincia()
    {
        return $this->belongsTo(
            Provincias::class,
            'id_provincia',
            'id'
            );
    }

    public function getLocalidad()
    {
        return $this->belongsTo(
            Localidades::class,
            'id_localidad',
            'id'
            );
    }

    

}
