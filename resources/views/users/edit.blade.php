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

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/users/{{$user->id}}/edit" method="POST">
            @method('patch')
            @csrf

            <div class="form-group">
                <label>First name</label>
                <input type="text" 
                    class="form-control {{ $errors->has('firstname') ? ' is-invalid' : '' }}" 
                    name="firstname" 
                    value="{{ old('firstname') }}"
                    placeholder="First Name">
                
                @if ($errors->has('firstname'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('firstname') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label>Last Name</label>
                <input type="text" 
                    class="form-control {{ $errors->has('lastname') ? ' is-invalid' : '' }}" 
                    name="lastname" 
                    value="{{ old('lastname') }}"
                    placeholder="Last Name">

                @if ($errors->has('lastname'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('lastname') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="form-group">
                <label>Email</label>
                <input type="text" 
                    class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" 
                    name="email" 
                    value="{{$user->email}}"
                    placeholder="Email">

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="Phone">
            </div>

            <div class="form-group">
                <label>Date of Birst</label>
                <input type="date" class="form-control" name="date_of_birth" placeholder="dd/mm/yyyy">
            </div>

            <div class="form-group">
                <label>User Name</label>
                <input type="text" class="form-control" name="user_name">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password">
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="text" class="form-control" name="password_confirmation">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>
</html>