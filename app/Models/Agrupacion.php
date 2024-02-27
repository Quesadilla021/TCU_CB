<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agrupacion extends Model
{
    protected $table = 'agrupaciones';
    protected $primaryKey = 'id_agrupacion';
    public $timestamps = false;
}
