<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassInfo extends Model
{
    public function subject(){
       return $this->belongsToMany('App\SubjectInfo');
    }

    public function student(){
       return $this->belongsToMany('App\StudentInfo');
    }

        public function teacher(){
       return $this->belongsToMany('App\TeacherInfo');
    }
}
