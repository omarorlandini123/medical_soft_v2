<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table ='permiso';
    public $primaryKey='id';
    public $timestamps=false;

    public function perfil_permiso(){
        return $this->hasMany('App\modelos\PerfilPermiso','cod_permiso','cod_permiso');
    }

    public function user_permiso(){
        return $this->hasMany('App\modelos\UserPermiso','cod_permiso','cod_permiso');
    }

}
