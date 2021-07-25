<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>blog</title>
        
                <!--cssの呼び出し-->
        <link rel="stylesheet" href="{{ secure_asset('css/blog.css') }}" type="text/css">
        
    </head>
    <body>
        
        <p class='create'>[<a href='/blogs/create'>create</a>]</p>
        <div class='blogs'>
            @foreach($blogs as $blog)
            <div class='blog'>
                <a href='/blogs/{{ $blog->id }}'><h2 class='title'>{{ $blog->title }}</h2></a>
                <p class='body'>{{ $blog->body}}</p>
            </div>
            @endforeach
        </div>
        <div class="paginate">
            
        </div>
    </body>