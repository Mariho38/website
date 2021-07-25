<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        
                <!--cssの呼び出し-->
        <link rel="stylesheet" href="{{ secure_asset('css/blog.css') }}" type="text/css">
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/blogs" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="blog[title]" placeholder="タイトル" value="{{ old('blog.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('blog.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="blog[body]" placeholder="今日も1日お疲れさまでした。">{{ old('blog.body') }}</textarea>
                 <p class="body__error" style="color:red">{{ $errors->first('blog.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
