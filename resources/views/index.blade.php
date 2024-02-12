<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Books</title>
</head>
<body>
    <h1>List of Books</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Authors</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>
                    
                        @foreach($book->authors as $author)
                            {{ $author->name }}
                        @endforeach
                   
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


    <h1>List of Authors</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Authors</th>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
            <tr>
                <td>{{ $author->name }}</td>
                <td>
                    
                        @foreach($author->books as $book)
                            {{ $book->title }}
                        @endforeach
                   
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
