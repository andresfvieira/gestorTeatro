<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    public $timestamps = false;
    public function rol(){
        return $this->belongsTo(Rol::class, 'id_rol', 'id_rol');
    }
}
