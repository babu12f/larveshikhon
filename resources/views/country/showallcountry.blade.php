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
        <h1>Country List</h1>
        <p>
            <a href="/countries/create">Create New Country</a>
        </p>
        <table class="table">
            <thead>
                <tr>
                    <th>@Id</th>
                    <th>Name</th>
                    <th>Capital</th>
                    <th>Currency</th>
                    <th>Population</th>
                    <th>Created On</th>
                    <th>Updated On</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($countries as $country)
                    <tr>
                        <td>{{ $country->id }}</td>
                        <td> 
                            <a href="/countries/{{$country->id}}"> {{ $country->name }} </a>
                        </td>
                        <td>{{ $country->capital }} </td>
                        <td>{{ $country->currency }} </td>
                        <td>{{ $country->population }} </td>
                        <td>{{ $country->created_at->diffForHumans() }} </td>
                        <td>{{ $country->updated_at->format('Y - m - d')  }} </td>
                        <td> 
                            <a href="/countries/{{$country->id}}/edit" class="btn btn-success btn-sm">Edit</a> |

                            <form action="/countries/{{$country->id}}/delete" method="POST">
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn btn-danger btn-sm" >Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>
</html>