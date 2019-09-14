<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectInfo extends Model
{
	public function class(){
    return $this->hasMany('App\SubjectInfo', 'class_id');
  }
}
