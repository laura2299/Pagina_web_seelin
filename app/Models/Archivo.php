<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'format',
        'fecha_subida',
        'categoria',
        'feha',
        'estado'
    ];
    public function users(){
    
        return $this ->belongsToMany('App\Models\User','usuario_archivo', 'id_usuario', 'id_archivo')->withPivot('fechad'); 
        }
}
