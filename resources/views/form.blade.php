<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <input type="text" name="name">
        <textarea name="description" id=""></textarea>
        <input type="text" name="price">
        <button name="submit" type="submit">save</button>
    </form>
</body>
</html>