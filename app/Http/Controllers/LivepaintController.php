<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivepaintController extends Controller
{
    //ライブペイント作品一覧
    public function index(Livepaint $livepaint)
    {
        return view('Livepaint.index')->with(['livepaint'=> $livepaint->get()]);
    }
    
    //作品詳細
    public function show(Livepaint $livepaint)
    {
        return view('Livepaint.show')->with(['livepaint'=> $livepaint]);
    }
    
    //新規ライブペイント作品
    public function create()
    {
        return view('Livepaint.create');
    }
    
    //DBへの保存
    public function store(Request $request, Livepaint $livepaint)
    {
        $input = $request['livepaint'];
        $livepaint->fill($input)->save();
        
        return redirect('/livepaints/' . $livepaint->id);
    }
    
    //ライブペイント作品登録編集
    public function edit()
    {
        return view('Livepaint.edit')->with(['livepaint'=> $livepaint]);
    }
    
    //更新
    public function update(PostRequest $request, Livepaint $livepaint)
    {
        $input_livepaint = $request['livepaint'];
        $livepaint->fill($input_livepaint)->save();
        
        return redirect('/livepaints/' . $livepaint->id);
    }
    
    //削除
    public function delete(Livepaint $livepaint)
    {
        $livepaint->delete();
        return redirect('/');
    }
}
