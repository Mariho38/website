<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Work's Name</h1>
        <form action="/groups" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="group[title]" placeholder="タイトル" value="{{ old('group.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('group.title') }}</p>
            </div>
            <div class="detail">
                <h2>Detail</h2>
                <textarea name="group[detail]" placeholder="今日も1日お疲れさまでした。">{{ old('group.detail') }}</textarea>
                 <p class="detail__error" style="color:red">{{ $errors->first('group.detail') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
