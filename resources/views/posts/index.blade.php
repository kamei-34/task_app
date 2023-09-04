<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>タスク管理アプリ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h2>タスクリスト</h2>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h3 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h3>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
                    </form>
                </div>
            @endforeach
        </div>
        <a href='/posts/create'>create</a>
    </body>
    <script>
        function deletePost(id) {
            'use strict'
            if (confirm('削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</html>