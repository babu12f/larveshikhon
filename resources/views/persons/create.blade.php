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
        <h1>Create Person</h1>

        <form action="/persons/create" method="POST">

            @csrf

            <div class="form-group">
                <label for="">Person Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" name="phone" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Country Id</label>
                <select name="country" id="country" class="form-control">
                    <option value="">Select Your country</option>
                    @foreach ($countries as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create Person</button>

        </form>

    </div>
</body>
</html>