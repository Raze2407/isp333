<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('posts.update', ['post' => $id])}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="title" id="">
        <button type="submit">Отправить</button>
    </form>
</body>
</html>