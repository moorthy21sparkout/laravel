<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>informatons</title>
</head>

<body>
    <center>

        <h2>Edi the employ informatons</h2>
        @if (session('success'))
            <div style="color:green;">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div style="color:red">
                {{ session('error') }}
            </div>
        @endif
        <form action="{{ route('worker.update', ['worker' => $worker]) }}" method="post">
            @csrf
            @method('put')
            <div>
                <label>employ name</label>
                <input type="text" name="name" placeholder="name" value="{{ $worker->name }}">
            </div>
            <div>
                <label>employ age</label>
                <input type="int" name="age" placeholder="age" value="{{ $worker->age }}">
            </div>
            <div>
                <label>mobile number</label>
                <input type="int" name="mobile" placeholder="number" value="{{ $worker->mobile }}">
            </div>
            <div>
                <input type="submit" value="update">
            </div>
        </form>
    </center>
</body>
<!-- -> is used to access properties and methods of an object in PHP.-->
<!-- => is used in PHP to assign values to keys in associative arrays-->

</html>
