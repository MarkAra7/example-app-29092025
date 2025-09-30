<!DOCTYPE html>
<html>

<head>
    <title>Posts saraksts</title>
</head>

<body>
    <h1>Posts saraksts</h1>
    <ul>
        @foreach ($posts as $post)
        <li>
            <strong>{{ $post->title }}</strong>: {{ $post->content }}
        </li>
        @endforeach
    </ul>

    <a href="{{ url('/posts/create') }}">Izveidot jaunu ierakstu</a>


</body>

</html>