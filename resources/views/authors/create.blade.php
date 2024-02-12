<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Author</title>
</head>
<body>
    <h1>Add New Author</h1>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <label for="name">Author Name:</label>
        <input type="text" id="name" name="name">
        <button type="submit">Add Author</button>
    </form>
</body>
</html>
