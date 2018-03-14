<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cijfer extends Model
{
    public function Module(){
        return $this->belongsTo('App\Module');
    }
    public function User(){
        return $this->belongsTo('App\User');
    }

    protected $fillable = [
        'cijfer','user_id','module_id'
    ];
}
