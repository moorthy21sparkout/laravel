<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if(!empty($success))
    <div>
        {{$success}}
    </div>
    @endif
    <a href="{{route('event.index')}}">
        <button type="submit">touch me</button>
    </a>
</body>

</html>
