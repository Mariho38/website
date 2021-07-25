<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    //仕事依頼作品一覧
    public function index()
    {
        return view('Request.index')->
    }
    
    //仕事依頼作品詳細
    public function show()
    {
        return view('Request.show')->
    }
    
    //新規仕事依頼
    public function create()
    {
        return view('Request.create');
    }
    
    //DBへの保存
    public function store()
    {
        
    }
    
    //仕事依頼作品登録編集
    public function edit()
    {
        return view('Request.edit')->
    }
    
    //更新
    public function update()
    {
        
    }
    
    //削除
    public function delete()
    {
        
    }
    
}