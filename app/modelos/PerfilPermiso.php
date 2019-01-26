<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class PerfilPermiso extends Model
{
    protected $table ='perfil_permisos';
    public $primaryKey='id';
    public $timestamps=false;

    public function perfil(){
        return $this->belongsTo('App\modelos\Perfil','perfil_id','id');
    }

    public function permiso(){
        return $this->belongsTo('App\modelos\Permiso','cod_permiso','cod_permiso');
    }
    


}
