<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioArchivo extends Model
{
    use HasFactory;
    protected $fillable=['id_usuario','id_archivo','fechad'];
    public $timestamps = false;
}
