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
            <a href="{{ url('/posts/' . $post->id) }}">
                <strong>{{ $post->title }}</strong>
            </a>: {{ $post->content }}
        </li>
        <a href="{{ url('/posts/' . $post->id . '/edit') }}">Rediģēt</a>
        <a href="{{ url('/posts/delete/' . $post->id) }}">Delete</a>
        @endforeach
    </ul>

    <a href="{{ url('/posts/create') }}">Izveidot jaunu ierakstu</a>


</body>

</html>