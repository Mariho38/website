<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //一覧(個展、グループ展、ライブペイント、仕事)表示
    public function index()
    {
        return view('category');
    }
    
    public function solo()
    {
        return view('Solo.index');
    }
    
    public function group()
    {
        return view('Group.index');
    }
    
    public function livepaint()
    {
        return view('Livepaint.index');
    }
    
    public function request()
    {
        return view('Request.index');
    }
}
