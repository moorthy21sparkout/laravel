<html>

<head>
    <title>Filtered Data</title>
</head>

<body>
    <h1>Filtered Data</h1>
    <ul>
        @foreach ($filter as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

</body>

</html>
