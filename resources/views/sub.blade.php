<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @component('alert')
        <strong>Whoops!</strong> Something went wrong!
    @endcomponent 

    @componentFirst(['custom.alert', 'alert'])
        <strong>Whoops!</strong> Something went wrong!
    @endcomponent --}}

    @component('alert')
        @slot('title')
            Forbidden
        @endslot

        You are not allowed to access this resource!
    @endcomponent

</body>
</html>