<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    public $timestamps = false;
     //relacion uno a muchos con trabajo
    public function trabajos(){
        return $this->hasMany(Trabajo::class,'id_cliente');
    }
}
