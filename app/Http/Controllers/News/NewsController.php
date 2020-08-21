<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function create(){
        return view('news.create');
    }
    public function lists(){
        return view('news.lists');
    }
}
