<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('books.store')}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="name" required>
    <input type="text" name="author" placeholder="author" required>
    <input type="text" name="price" placeholder="price" required>
    <input type="submit" value="submit">

</form>
</body>
</html>
