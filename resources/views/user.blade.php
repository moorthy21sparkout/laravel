<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

        }

        form {
            width: 300px;

            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        div {
            margin-bottom: 10px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #249038;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor:no-drop;
    </style>
</head>

<body>

    <div class="container">
        <form action="validate" method="post" enctype="multipart/form-data">
            @csrf
            <label>enter the name</label>
            <div>
                <input type="text" name="name" id="name">
                @error('name')
                    <div class="error-message" style="color: red">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br><br>
            <div>
                <label>enter the email</label>
                <input type="email" name="email" id="email">
                @error('email')
                    <div class="error-message" style="color: red">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br><br>
            <div>
                <label>enter the age</label>
                <input type="text" name="age" id="age">
                @error('age')
                    <div class="error-message" style="color: red">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br><br>
            <button type="submit">send</button>
        </form>
    </div>

</body>

</html>
