<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function students(){
        return view('admin.students.index');
    }

    public function courses(){
        return view('admin.course.index');
    }

    public function type(){
        return view('admin.course.type');
    }

    public function selections(){
        return view('admin.course.selection');
    }


}
