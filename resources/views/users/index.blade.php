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

        <table class="table">
            <tr>
                <td>Id</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email</td>
                <td>Phone </td>
                <td>Date of Birth</td>
                <td>Action</td>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->lastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->date_of_birth->diffForHumans() }}</td>
                    <td> 
                        <a href="/users/{{$user->id}}/show">
                            show profile
                        </a> |
                        <a href="/users/{{$user->id}}/edit">
                            edit
                        </a>

                    </td>
                </tr>
            @endforeach
           
        </table>

        {{ $users->links() }}

    </div>

</body>
</html>