<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset-"utf-8">
        
        <title>アメリンゴ</title>
        
        <!--cssの呼び出し-->
        <link rel="stylesheet" href="{{ secure_asset('css/top.css') }}" type="text/css">
          <!-- Fonts -->
        
    </head>
    <body>
        <div class = 'elements'>
            <button onclick="location.href='/blogs/'">Blog</button>
            <button onclick="location.href='/categorys/'">Work</button>
            <button onclick="location.href='/profiles/'">Profile</button>
            <button onclick="location.href=''">Q&A</button>
        </div>
    </body>
</html>