<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Summation</h1>

    <p> result = {{ $result }} </p>

    @if($result % 2 == 0)
       <p>{{ "even number" }}</p>
    @else
        <p>{{ "odd number" }} </p>
    @endif

    @switch($result)
        @case(24)
           <p> {{ "twenty four" }}</p>
            @break
        @case(25)
            <p>{{ "twenty five" }}</p>
            @break
        @default
            <p>{{ "not found" }}</p>
    @endswitch

    {{--
    @for($i = 1; $i<= 10; $i++)
        <p style="background:#f6f6f6">{{ $i }}</p>
    @endfor  --}}

    @{{ $result }}

    {{--
    @if(count($data) >0)
        @foreach($data as $k => $d )
            <p> <strong>{{ $k }}</strong> {{ $d }}</p>
        @endforeach
    @else
        {{ "no data found" }}
    @endif  --}}

    @forelse($data as $v)
        <p {{ $loop->even ? "style=background:green;":"style=background:red;" }} > <strong> {{ $loop->depth }} </strong> {{ $v }}</p>
    @empty
        {{ "no result found" }}
    @endforelse

</body>
</html>