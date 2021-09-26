<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function students(){
        $data = User::all();
        return view('admin.students.index', compact('data'));
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
