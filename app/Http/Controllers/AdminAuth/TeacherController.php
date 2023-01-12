<?php

namespace App\Http\Controllers\AdminAuth;

use App\Exceptions\TeacherNotFound;
use App\Exceptions\UserNotFoundException;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Service\TeacherService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\RelationNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(TeacherService $teacherService)
    {
             $this->teacherService =  $teacherService;
    }

    public function index()
    {

        try {
            $teacher = Teacher::latest()->get();
//           dd($teacher);
        }catch (\Exception $exception){
                return view('errors.notfound');
        }

        return view('admin.teacher.index',compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
//        Cache::Put('name','Teacher Id',$seonds=10);
//        Cache::Put('name','Teacher Id',$seonds=10);
//        dd(Cache::get('name'));

        try {
            $teacher= (new TeacherService())->findTeacherById($id);
//            dd($teacher);
        }catch (TeacherNotFound $exception){
//            dd($exception->getMessage());
//            dd(get_class($exception));
//            return view('errors.teacherNotFound',['error'=> $exception->getMessage()]);
            return view('errors.teacherNotFound',['error' => $exception->getMessage()]);
        }

        return view('admin.teacher.show',compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
