<!DOCTYPE html>
<html>

<head>
    <title>Izveidot jaunu postu</title>
</head>

<body>

    <h1>Izveidot jaunu postu</h1>
    <form method="POST" action="{{ url('/posts/store') }}">
        @csrf
        <label for="title">Virsraksts:</label><br>
        <input type="text" id="title" name="title"><br><br>

        <label for="content">Saturs:</label><br>
        <textarea id="content" name="content"></textarea><br><br>

        <button type="submit">Izveidot</button>
    </form>
</body>

</html>
