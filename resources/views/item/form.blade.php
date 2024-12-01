<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Form</h1>
    <form method="post" action="{{route('item.store')}}" enctype="multipart/form-data">
        @csrf
        <label for="file_name">Image:</label>
        <input type="file" name="image"><br><br>

        <label>Description</label>
        <input type="text" name="description"><br><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>