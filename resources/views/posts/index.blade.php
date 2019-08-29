<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Video List</h1>

        <table class="table">
            <tr>
                <th>@id</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
            @foreach ($posts as $post)    
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="/posts/{{$post->id}}">Show</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
</body>
</html>