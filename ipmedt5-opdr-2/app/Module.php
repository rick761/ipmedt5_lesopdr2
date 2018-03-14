<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //
    public function Cijfers(){
        return $this->hasMany('App\Cijfer');
    }
    public function Vaardigheden(){
        return $this->hasMany('App\Vaardigheid');
    }
}
