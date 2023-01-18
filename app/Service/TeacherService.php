<?php
namespace App\Service;

use App\Exceptions\TeacherNotFound;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Exceptions\UserNotFoundException;
class TeacherService{
    public function index(){

    }

    public function create(array $teacherData){

    }

    public function store(array $teacherData){

    }

    public function edit(array $teacherData, Teacher $teacher){

    }

    public function destroy(Teacher $teacher){

    }

   public function findTeacherById($teacherId){

       $teacher = Teacher::where('id',$teacherId)->first();
//       $relation = $teacher->load(['profile']);

       if (!$teacher){
//           throw new T('The Requested User ID is not available'. ' => '. $teacherId);
           throw new TeacherNotFound('The Requested Teacher was not found'. ' '. $teacherId);
       }
        return $teacher;
   }

}
