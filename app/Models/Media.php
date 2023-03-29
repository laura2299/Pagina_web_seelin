<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'descripcion',
        'categoria',
        'estado'
    ];
     //relacion uno a muchos con trabajo
     public function imagens(){
        return $this->hasMany(Imagen::class,'id_media');
    }
}
