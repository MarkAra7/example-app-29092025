<!DOCTYPE html>
<html>

<head>
    <title>{{ $post->title }}</title>
</head>

<body>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <a href="{{ url('/posts/delete/' . $post->id) }}">Delete</a>
    <br>
    <a href="{{ url('/posts/' . $post->id . '/edit') }}">Rediģēt</a>

    <br>
    <a href="{{ url('/posts') }}">Atpakaļ uz sarakstu</a>
</body>

</html>