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
        <h1>Book Create</h1>

        <form action="/books/create" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Book Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>

            <div class="form-group">
                <label for="description">Book Description</label>
                <textarea name="description" class="form-control" id="description" cols="10" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="isbn">ISBN Number</label>
                <input type="text" name="isbn" class="form-control" id="isbn">
            </div>

            <div class="form-group">
                <label for="isbn">Book Authors</label>
                <select name="authors[]" id="authors" class="form-control" multiple>
                    
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach

                </select>

            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</body>
</html>