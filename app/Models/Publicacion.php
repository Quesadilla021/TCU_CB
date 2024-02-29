<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table = 'publicaciones';
    protected $primaryKey = 'id_publicacion';
    public $timestamps = false;

    public function multimedia()
    {
        return $this->hasMany(Multimedia::class,'id_publicacion');
    }

    public function agrupacion(){
        return $this->belongsTo(Agrupacion::class,'id_marca');
    }
}
