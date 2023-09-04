<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>タスク管理アプリ</title>
    </head>
    <body>
        <h1>追加タスクの作成</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>追加タスク名</h2>
                <input type="text" name="post[title]" placeholder="ここに入力" value="{{ old('post.title')}}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>内容</h2>
                <textarea name="post[body]" placeholder="ここに入力">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>