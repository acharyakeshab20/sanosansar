<?php

namespace App\Exceptions;

use Exception;

class TeacherNotFound extends Exception
{
    public function report(){

    }

    public function render(){
        return view('admin.teacherNotFound');
    }
}
