<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" />
        <title>My hello world</title>
    </head>

    <body>
        <h1>Hello</h1>

        @foreach($resort as $item)
            <div>
                Title: {{ $item->title }}<br />
                Content: <p>{{ $item->content }}</p>
            </div>
        @endforeach
    </body>
</html>