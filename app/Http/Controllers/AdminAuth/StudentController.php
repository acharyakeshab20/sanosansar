<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studnet= Student::all();
//        dd($studnet);
        return view('admin.student.index',compact('studnet'));
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
        $validation = $this->validate($request, [
            'name' => 'required|string',
            'phone' => 'required|numeric|digits:10',
            'address' => 'required',
            'image.*' => 'required|mimes:pdf,csv,xls,docx,doc,jpg,png,xlsx',
        ]);


        /////MULTIPLE IMAGE UPLOAD
//        dd($request->all());
//        $filelists= [];
//        $uploadimages = $request->files->all('image');
//        foreach ($uploadimages as $imagedetails){
//            $images = Image::make($imagedetails);
//            $filename = 'Img-'.date('mdYhis').'-'.rand(0,99999999).'.jpg';
//            $images->resize(1200, 800, function ($constraint) {
//                $constraint->aspectRatio();
//                $constraint->upsize();
//            })->save(public_path("image/admin/{$filename}"));
//                $filelists[] = $filename;
//        }
//             $validation['image'] = $filelists;
//             Student::create($validation);
///
//       }

        //SINGLE FILE UPLOAD
//        $filelist=[];
//        $uploadimage = $request->file('image');
//        $filename = $uploadimage->getClientOriginalName();
//        $uploadimage->move(public_path('image/admin'),$filename);
//        $filelist[] = $filename;
//        $validation['image'] = $filelist;
//        Student::create($validation);


        //MULTIPLE FILE UPLAOD
        $filelist=[];
        $uploadfile= $request->files->all('image');
        foreach ($uploadfile as $file){
           $name= $file->getClientOriginalName();
//           dd($name);
           $extension= $file->getClientOriginalExtension();
//           dd($extension);
            $names = 'UploadedFile'.date('mdYhis').'-'.rand(0,9999999).$name;
             $dictionary=  $file->move(public_path('image/admin/'),$names);
                $filelist[]=$names;
            $image= $validation['image'] = $filelist;
//            dd($dictionary,$image);
        }
        $create=  Student::create($validation);


//
//        $validation['image'] = $filelist;
//        Student::created($validation);

        //SINGLE IMAGE UPLOAD
//        $uploadimage->save(public_path("image/admin/files/{$filename}"));
//        $filelist =$filename;
//        $validation['image'] = $filelist;
//        Student::create($validation);

//        $images->resize('1200','800',function ($constraint){
//            $constraint->aspectRatio();
//            $constraint->upsize();
//        })->save(public_path("image/admin/{$filename}"));
//        $filelist[] = $filename;
//        $validation['image'] = $filelist;
//        Student::create($validation);
//    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $studnet = Student::findOrFail($id);
        return view('admin.student.show',compact('studnet'));
//        return Response::make(file_get_contents('images/image1.pdf'), 200, [
//            'content-type'=>'application/pdf',
//        ]);
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
