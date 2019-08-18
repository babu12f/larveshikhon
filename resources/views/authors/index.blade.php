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
                <td>Author name</td>
                <td>Author Email</td>
                <td>Action</td>
            </tr>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->email }}</td>
                </tr>
            @endforeach
        </table>

    </div>
</body>
</html>