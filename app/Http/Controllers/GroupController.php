<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    //グループ展作品一覧
    public function index(Group $group)
    {
        return view('Group.index')->with(['groups'=> $group->get()]);
    }
    
    //グループ展作品詳細
    public function show(Group $group)
    {
        return view('Group.show')->with(['group'=> $group]);
    }
    
    // 新規グループ展作品
    public function create()
    {
        return view('Group.create');
    }
    
    //DBへの登録
    public function store(Request $request, Group $group)
    {
        $input = $request['group'];
        $group->fill($input)->save();
        
        return redirect('/groups/' . $group->id);
    }
    
    //グループ展作品登録編集
    public function edit()
    {
        return view('Group.edit')->with(['group'=> $group]);
    }
    
    //作品登録更新
    public function update(PostRequest $request, Group $group)
    {
        $input_group = $request['group'];
        $group->fill($input_group)->save();
        
        return redirect('/groups/' . $group->id);
    }
    
    //登録削除
    public function delete(Group $group)
    {
        $group->delete();
        return redirect('/');
    }
}
