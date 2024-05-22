<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Image Upload</h2>
    <form action="{{route('insert.form')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <label>chose the  image</label>
    <input type="file" name="image" id="image">
    <button type="submit">Upload </button>
    </form>
    
</body>
</html>