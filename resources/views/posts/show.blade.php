<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>タスク管理アプリ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <p>{{ $post->body }}</p>
            </div>
        </div>
        <div>
        <div class="footer">
            <button>
                <a href="/">戻る</a>
            </button>
        </div>
        <div class="edit">
            <button>
                <a href="/posts/{{ $post->id }}/edit">変更</a>
            </button>
        </div>
        </div>
    </body>
</html>