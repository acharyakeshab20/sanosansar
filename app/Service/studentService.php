<?php

namespace App\Service;

use App\Models\Student;
use Illuminate\Http\Request;


class studentService
{
    public function index(){
//        return Student::name('dff')->get();
           return Student::latest()->get();
    }

//    public function store(Request $request)
//    {
////        dd($request->all());
//        $validation = $this->validate($request, [
//            'name' => 'required|string',
//            'phone' => 'required|numeric|digits:10',
//            'address' => 'required',
//            'image.*' => 'required|mimes:pdf,csv,xls,docx,doc,jpg,png,xlsx',
//            'message' => 'required'
//        ]);
//
//
//        /////MULTIPLE IMAGE UPLOAD
////        dd($request->all());
////        $filelists= [];
////        $uploadimages = $request->files->all('image');
////        foreach ($uploadimages as $imagedetails){
////            $images = Image::make($imagedetails);
////            $filename = 'Img-'.date('mdYhis').'-'.rand(0,99999999).'.jpg';
////            $images->resize(1200, 800, function ($constraint) {
////                $constraint->aspectRatio();
////                $constraint->upsize();
////            })->save(public_path("image/admin/{$filename}"));
////                $filelists[] = $filename;
////        }
////             $validation['image'] = $filelists;
////             Student::create($validation);
/////
////       }
//
//        //SINGLE FILE UPLOAD
////        $filelist=[];
////        $uploadimage = $request->file('image');
////        $filename = $uploadimage->getClientOriginalName();
////        $uploadimage->move(public_path('image/admin'),$filename);
////        $filelist[] = $filename;
////        $validation['image'] = $filelist;
////        Student::create($validation);
//
//
//        //MULTIPLE FILE UPLAOD
//        $filelist=[];
//        $uploadfile= $request->files->all('image');
//        foreach ($uploadfile as $file){
//            $name= $file->getClientOriginalName();
////           dd($name);
//            $extension= $file->getClientOriginalExtension();
////           dd($extension);
//            $names = 'UploadedFile'.date('mdYhis').'-'.rand(0,9999999).$name;
//            $dictionary=  $file->move(public_path('image/admin/'),$names);
//            $filelist[]=$names;
//            $image= $validation['image'] = $filelist;
////            dd($dictionary,$image);
//        }
//
//        $create=  Student::create($validation);
//        flash('Student Updated Successfully')->success();
//        return redirect()->route('admin.student.index');
//
//
////
////        $validation['image'] = $filelist;
////        Student::created($validation);
//
//        //SINGLE IMAGE UPLOAD
////        $uploadimage->save(public_path("image/admin/files/{$filename}"));
////        $filelist =$filename;
////        $validation['image'] = $filelist;
////        Student::create($validation);
//
////        $images->resize('1200','800',function ($constraint){
////            $constraint->aspectRatio();
////            $constraint->upsize();
////        })->save(public_path("image/admin/{$filename}"));
////        $filelist[] = $filename;
////        $validation['image'] = $filelist;
////        Student::create($validation);
////    }
//    }
}
