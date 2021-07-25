<!doctype html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ブログ</title>
        <link rel="stylesheet" href="">
    </head>
     <body>
        
        
        <p class="edit">[<a href="/blogs/{{ $blog->id }}/edit">edit</a>]</p>
        <form action="/blogs/{{ $blog->id }}" id="form_delete{{ $blog->id }}" method="post" style="display:inline">
         @csrf
         @method('DELETE')
         <button type="submit">[<span onclick="return deletePost(this)">delete</span>]</button> 
        </form>
            <div class='content'>
            <h2 class='title'>{{ $blog->title }}</h2>
            <p class='body'>{{ $blog->body }}</p></p> 
            <p class='updated_at'>{{ $blog->updated_at }}</p>
            </div>
        
        <div class='back'>[<a href='/blogs/'>back</a>]</div>
        
        <script>
        function deletePost(){
            "use strict";
            if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                document.getElementById('form_delete').submit();
            }
            
        }
        
            
        </script>
    </body>
</html>
