<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="productform">Add Another</a>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Category</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $products)
                <tr>
                    <td>{{ $products->id }}</td>
                    <td>{{ $products->category->category }}</td>
                    <td>{{ $products->product_name }}</td>
                    <td>{{ $products->price }}</td>
                    <td><img src="{{ asset('images/' . $products->image) }}" width="200px" height="200px" alt=""></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>