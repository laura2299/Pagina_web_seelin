<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'archivo',
        'id_Media',
        'estado'
    ];
    //relacion uno a muchos inversa con media
    public function media()
    {
        return $this->belongsTo('App\Models\Media', 'id_media');
    }
}
