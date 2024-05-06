<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h2>create the employ informatons</h2>
        <div>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <!-- error validation-->
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <form action="{{ route('worker.store') }}" method="post">

            <!-- secure purpose-->
            {{-- @csrf  --}}
            @csrf
            @method('post')
            <div>
                <label>employ name</label>
                <input type="text" name="name" placeholder="name">
            </div>
            <div>
                <label>employ age</label>
                <input type="int" name="age" placeholder="age">
            </div>
            <div>
                <label>mobile number</label>
                <input type="int" name="mobile" placeholder="number">
            </div>
            <div>
                <input type="submit" value="save the detatiles">
            </div>
        </form>
    </center>
</body>

</html>
