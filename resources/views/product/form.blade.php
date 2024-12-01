<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Product Form</h1>
    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="category_id">Category Name</label>
        <select name="category_id" id="category_id" required>
            <option value="">Select</option>
            @foreach ($category as $item)
                <option value="{{ $item->id }}">{{ $item->category }}</option>
            @endforeach
        </select><br><br>

        <label for="product_name">Product Name</label>
        <input type="text" name="product_name" id="product_name" required><br><br>

        <label for="price">Price</label>
        <input type="text" name="price" id="price" required><br><br>

        <label for="image">Product Image</label>
        <input type="file" name="image" id="image" accept="image/*" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>