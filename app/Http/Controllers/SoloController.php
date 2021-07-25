<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoloController extends Controller
{
    //個展作品一覧
    public function index(Solo $solo)
    {
        return view('Solo.index')->with(['solo'=> $solo->get()]);
    }
    
    //詳細画面
    public function show(Solo $solo)
    {
        return view('Solo.show')->with(['solo'=> $solo]);
    }
    
    //新規作品登録
    public function create()
    {
        return view('Solo.create');
    }
    
    //DBへの保存
    public function store(Request $request, Solo $solo)
    {
        $input = $request['solo'];
        $solo->fill($input)->save();
        return redirect('/solos/' . $solo->id);
    }
    
    //作品登録編集
    public function edit()
    {
        return view('Solo.edit')->with(['solo'=> $solo]);
    }
    
    //作品登録更新
    public function update(PostRequest $request, Solo $solo)
    {
        $input_solo = $request['solo'];
        $solo->fill($input_solo)->save();
        
        return redirect('/solos/' . $solo->id);
    }
    
    //登録削除
    public function delete(Solo $solo)
    {
        $solo->delete();
        return redirect('/');
    }
}
