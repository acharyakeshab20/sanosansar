<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function index(Request $request){
        return view('admin.ajax.index');
    }

    public function show(Request $request){
            return $request->all();
    }

    public function showto(Request $request){
        return 'helo';
    }
}
