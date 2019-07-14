<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title> @yield('title') </title>

    @yield('style')

</head>
<body>
    <div class="container">
        @include('partials.menu')

        @yield('contant')

        @section('extrafield')
            <p>Lorem text</p>
        @show
        <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png" alt="">
    </div>

    @yield('script')
</body>
</html>