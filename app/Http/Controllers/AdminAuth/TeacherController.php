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
use Illuminate\Support\Facades\DB;

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
//            $teacher =  DB::table('teachers')->get();
//              $teacher =  Teacher::where('name','Skyla Lockman IV')->get()->toSqL();

//            dd($teacher);
//            $teacher = Teacher::where('id',18)
//                                // ->orwhere('shift','aqua')
//                                ->Orwhere( function($query){
//                                    $query->select('created_at','11')
//                                        ->OrwhereDay('created_at','10');
//                                })
//                                ->get();
                                // ->toSql();
//            $teacher = Teacher::all();

//              $teacher = Teacher::where('shift','luffy')
//                                  ->orwhere('shift','aqua')
//                                  ->where( function($query){
//                                      $query->whereMonth('created_at','01')
//                                          ->OrwhereMonth('created_at','5');
//                                  })
//                                  ->get();
//                                 ->toSql();

                $teacher = Teacher::shift("M",'Saige Block')
                                    ->get();
//
//            $teacher = Teacher::shift('M')
//                                ->email('ahmad30@example.com')
//                                ->get();
//            dd($teacher);
            // $teacher = Teacher::where('shift','yellow')
            //                     ->where('cretaed_at','2023-01-04')
            //                     // ->toSql();
            //                     ->get();

        }catch (\Exception $exception){
                return view('errors.notfound');
        }

//              echo $teacher; die();
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
