<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class UserPerfil extends Model
{
    protected $table ='users_perfil';
    public $primaryKey='id';
    public $timestamps=false;

    public function user(){
        return $this->belongsTo('App\User','users_id','id');
    }

    public function perfil(){
        return $this->belongsTo('App\modelos\Perfil','perfil_id','id');
    }

}
