<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QnAController extends Controller
{
    //Q＆A一覧表示
    public function index()
    {
        return view('QnA.index')->with(['questions'=> $question]);
    }
    
    //新規質問作成画面
    public function create()
    {
        return view('QnA.create');
    }
    
    public function store(Request $request, Question $question)
    {
        $input = $request['question'];
        $question->fill($input)->save();
        
        return redirect('/questions/' . $question->id);
    }
    
    public function delete(Question $question)
    {
        $question->delete();
        return redirect('/');
    }
}

