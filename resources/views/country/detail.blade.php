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
        <h1> {{ $country->name }} Detail</h1>
        <h2> {{ $country->capital }} </h2>

        <table class="table">
                <thead>
                    <tr>
                        <th>@Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>
    
                <tbody>
                    @foreach ($country->persons as $person)
                        <tr>
                            <td>{{$person->id}}</td>
                            <td>{{$person->name}}</td>
                            <td>{{$person->email}}</td>
                            <td>{{$person->phone}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        
    </div>
</body>
</html>