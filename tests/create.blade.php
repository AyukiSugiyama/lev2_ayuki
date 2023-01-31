<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>present</title>
    </head>
    <body>
        <h1>質問投稿ページ</h1>
        <h1>本サイトに沿った質問のみ投稿をお願いします。</h1>
        <form action="/questions" method="QUESTION">
            @csrf
            <div class="title">
                <h2>投稿者名</h2>
                <input type="text" name="question[name]" placeholder="本名は非推奨です"/>
            </div>
            <div class="body">
                <h2>質問内容</h2>
                <textarea name="question[body]"></textarea>
            </div>
            <input type="submit" value="投稿"/>
        </form>
        <div class="footer">
            <a href="/">ホームに戻る</a>
        </div>
    </body>
</html>