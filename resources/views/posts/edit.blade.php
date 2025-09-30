<!DOCTYPE html>
<html>

<head>
    <title>{{ $post->title }}</title>
</head>

<body>

    <h1>Rediģēt postu</h1>
    <form method="POST" action="{{ url('/posts/' . $post->id) }}">
        @csrf
        @method('PUT')

        <label for="title">Virsraksts:</label><br>
        <input type="text" id="title" name="title" value="{{ $post->title }}"><br><br>

        <label for="content">Saturs:</label><br>
        <textarea id="content" name="content">{{ $post->content }}</textarea><br><br>

        <button type="submit">Saglabāt</button>
    </form>

</body>

</html>