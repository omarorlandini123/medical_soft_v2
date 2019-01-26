<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table ='perfil';
    public $primaryKey='id';
    public $timestamps=false;

   
    public function perfil_permiso(){
        return $this->hasMany('App\modelos\PerfilPermiso','perfil_id','id');
    }

    public function user_perfil(){
        return $this->hasMany('App\modelos\UserPerfil','perfil_id','id');
    }
}
