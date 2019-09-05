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

        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif

        <h1>Tag List</h1>

        <table class="table">
            <tr>
                <th>#id</th>
                <th>Name</th>
                <th>Des</th>
            </tr>

            @foreach ($tags as $tag)
                <tr>
                    <td>{{$tag->id}}</td>
                    <td>
                        <a href="/tags/{{$tag->name}}"> {{$tag->name}}</a>
                    </td>
                    <td>{{$tag->description}}</td>
                </tr>
            @endforeach
        </table>
        
    </div>
</body>
</html>