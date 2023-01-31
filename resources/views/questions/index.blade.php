<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Present</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>質問一覧ページ</h1>
        <h1>質問投稿ページはこちら</h1>
        <a href="{{route('question.create')}}">質問投稿</a>
        <div class='questions'>
            @foreach ($questions as $question)
                <div class='question'>
                    <h2 class='name'>{{ $target->title }}</h2>
                    <p class='body'>{{ $target->body }}</p>
                </div>
            @endforeach
        </div>
        <a href="/">ホームに戻る</a>
    </body>
</html>