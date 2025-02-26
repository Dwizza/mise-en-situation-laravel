<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/addproduct">addproduct</a>
    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>description</th>
                <th>price</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td><a href="/destroy/{{$product->id}}">delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>