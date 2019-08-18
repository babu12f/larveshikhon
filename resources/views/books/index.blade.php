<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>LMS</title>
</head>
<body>
    <div class="container">
        <h1>Author List</h1>

        <table class="table">
            <tr>
                <td>@id</td>
                <td>Book name</td>
                <td>Book description</td>
                <td>ISBN</td>
                <td>Authors</td>
                <td>Action</td>
            </tr>

            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->isbn }}</td>

                    <td>

                        @foreach ($book->authors as $author)
                            <li> {{ $author->name }} </li>
                        @endforeach

                    </td>
                    <td>
                        <a href="/books/{{$book->id}}/edit" class="btn btn-danger btn-sm">Edit</a>
                    </td>
                </tr>
            @endforeach

        </table>

    </div>
</body>
</html>