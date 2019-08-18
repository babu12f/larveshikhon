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
        <h1>Author Create</h1>

        <form action="/authors/create" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Author Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>

            <div class="form-group">
                <label for="email">Author Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</body>
</html>