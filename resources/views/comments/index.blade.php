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
                <th>Commnet</th>
                <th>Type (Post / video)</th>
                <th>ID (Post / video)</th>
            </tr>
            @foreach ($comments as $comment)    
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->commnet_body }}</td>
                    <td>{{ $comment->commentable_type }}</td>
                    <td>{{ $comment->commentable_id }}</td>
                </tr>
            @endforeach
        </table>

    </div>
</body>
</html>