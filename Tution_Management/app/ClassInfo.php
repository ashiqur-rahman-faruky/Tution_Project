<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassInfo extends Model
{
    public function subject(){
       return $this->belongsToMany('App\ClassInfo');
    }
}
