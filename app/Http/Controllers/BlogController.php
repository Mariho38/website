<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Requests\BlogRequest;

class BlogController extends Controller
{
    //一覧表示
    public function index(Blog $blog)
    {
        
        return view('Blog.index')->with(['blogs'=> $blog->get()]);
    }
    
   //詳細表示
    public function show(Blog $blog)
    {
        return view('Blog.show')->with(['blog'=> $blog]);
    }
     
     //新規作成表示
    public function create()
    {
        return view('Blog.create');
    }
    
    //DBへの保存
    public function store(Blog $blog, BlogRequest $request)
    {
        $input = $request['blog'];
        $blog->fill($input)->save();
        return redirect('/blogs/' . $blog->id);
    }
    
    //編集
    public function edit()
    {
        return view('Blog.edit')->with(['blog'=> $blog]);
    }
    
    //更新
    public function update(BlogRequest $request, Blog $blog)
    {
        $input_blog = $request['blog'];
        $blog->fill($input_blog)->save();
        
        return redirect('/blogs/' .$blog->id);
    }
    
    //削除
    public function delete(Blog $blog)
    {
        $blog->delete();
        return redirect('/');
    }
}
