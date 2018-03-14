<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaardigheid extends Model
{
    protected $table = 'vaardigheden';

    public function Module(){
        return $this->belongsTo('App\Module');
    }
}
