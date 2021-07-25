<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>Group</title>
        
    </head>
    <body>
        
        <p class='create'>[<a href='/groups/create'>create</a>]</p>
        <div class='groups'>
            @foreach($groups as $groups)
            <div class='body'>
                <a href='/groups/{{ $group->id }}'><h2 class='title'>{{ $group->name }}</h2></a>
                <p class='path'>{{ $group->imgpass_id}}</p>
            </div>
            @endforeach
        </div>
        <div class="paginate">
            
        </div>
    </body>