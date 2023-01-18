<?php

namespace App\Service;

use App\Models\Student;

class studentService
{
    public function index(){
        return Student::name('dff')->get();
//           return Student::latest()->get();
    }
}
