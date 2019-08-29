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
        <h1>Video create</h1>
        <form action="/videos" method="POST">
            @csrf

            <div class="form-group">
                <label for="url">Url</label>
                <input id="url" type="text" class="form-control" name="Url">
            </div>

            <div class="form-group">
                <label for="video">Video Path</label>
                <input id="video" type="text" class="form-control" name="file_path">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>