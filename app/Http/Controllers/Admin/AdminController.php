<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('shou.index');
    }
    public function tianjia(){
        return view('category.tianjia');
    }
    public function zhan(){
        return view('category.zhan');
    }
}
