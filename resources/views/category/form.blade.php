<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Form</h1>
    <form method="POST" action="{{ route('category.store') }}">
        @csrf
        <label for="category">Category Name</label>
        <input type="text" name="category" id="category"><br><br>
        <label for="image">Image</label>
        <input type="file" name="image" id="image" accept="image/*" required><br><br>
        <button type="submit">Submit</button><br><br>
    </form>
</body>

</html>