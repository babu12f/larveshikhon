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

        <h1>Tag Details</h1>

        <dl>
            <dt>{{$tag->name}}</dt>
            <dd>{{$tag->description}}</dd>
        </dl>

        {{-- Video s List --}}
        <hr>
        <h1>Video List</h1>
        <table class="table">
            <tr>
                <th>#id</th>
                <th>Name</th>
                <th>Des</th>
                <th>created_at</th>
            </tr>

            @foreach ($tag->videos as $video)
                <tr>
                    <td>{{$video->id}}</td>
                    <td>{{$video->file_path}}</td>
                    <td>{{$video->url}}</td>
                    <td>{{$video->created_at->tz('5.30')}}</td>
                </tr>
            @endforeach
        </table>

        {{-- Post s List --}}
        <hr>
        <h1>General Post List</h1>
        <table class="table">
            <tr>
                <th>#id</th>
                <th>title</th>
                <th>created_at</th>
            </tr>

            @foreach ($tag->posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->created_at}}</td>
                </tr>
            @endforeach
        </table>
        
    </div>
</body>
</html>