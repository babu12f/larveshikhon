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
        <h1>post show</h1>

        <h2>{{$post->title}}</h2>

        <hr>
        <h2>Comments</h2>

        <ul>

            @forelse ($post->comments as $comment)
                <li>{{$comment->commnet_body}}</li>
            @empty
                <p>No Comment Yet</p>
            @endforelse
        </ul>

        <hr>

        <form action="/posts/{{$post->id}}/comments" method="POST">
            @csrf

            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea id="comment" type="text" class="form-control" name="comment_body" rows="7"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Add Comment</button>
        </form>

    </div>
</body>
</html>