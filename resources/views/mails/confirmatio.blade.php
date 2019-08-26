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

        <form action="/sendmail" method="POST">
            @csrf

            <div class="form-group">
                <label>Email TO</label>
                <input type="text" 
                    class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" 
                    name="email" 
                    value="{{ old('email') }}"
                    placeholder="Receiver Mail">
                
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="form-group">
                <label>Body</label>
                <textarea
                    class="form-control {{ $errors->has('body') ? ' is-invalid' : '' }}" 
                    name="body" 
                    value="{{ old('body') }}"
                    placeholder="Your Message" 
                    rows="10"
                    cols="10"></textarea>
                
                @if ($errors->has('body'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>

</body>
</html>