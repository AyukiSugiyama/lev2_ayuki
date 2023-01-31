<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Present</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>プレセントお助けサイト</h1>
        <h1>相手に送るプレセントで悩んだことはありませんか？このサイトでは各条件で人気なプレセントを絞り込みます。</h1>
        <h1>条件を選択してください</h1>
        <h1>年齢:</h1>
        <div class='targets'>
            @foreach ($targets as $target)
                <div class='target'>
                    <h2 class='title'>{{ $target->title }}</h2>
                </div>
            @endforeach
        </div>
        <h1>性別:</h1>
        <div class='sexes'>
            @foreach ($sexes as $sex)
                <div class='sex'>
                    <h2 class='title'>{{ $sex->title }}</h2>
                </div>
            @endforeach
        </div>
        <h1>相手との関係性:</h1>
        <div class='relations'>
            @foreach ($relations as $relation)
                <div class='relation'>
                    <h2 class='title'>{{ $relation->title }}</h2>
                </div>
            @endforeach
        </div>
        <h1>色:</h1>
        <div class='colors'>
            @foreach ($colors as $color)
                <div class='color'>
                    <h2 class='title'>{{ $color->title }}</h2>
                </div>
            @endforeach
        </div>
        <h1>予算:</h1>
        <h1>希望:</h1>
        <a href="{{ route('question.index')}}">その他、具体的な質問一覧はこちら</a>
    </body>
</html>