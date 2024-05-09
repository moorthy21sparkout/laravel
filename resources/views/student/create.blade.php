@extends('layout.app')

@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <center>
            <h2>create the student informatons</h2>
             @if ('error')
            <div style="color:red">
                {{ session('error') }}
            </div>
        @endif

            <form action="{{ route('student.store') }}" method="post">

                <!-- secure purpose-->
                {{-- @csrf  --}}
                @csrf
                @method('post')
                <div>
                    <label>name</label>
                    <input type="text" name="name" placeholder="name">
                </div>
                <div>
                    <label>email</label>
                    <input type="email" name="email" placeholder="email">
                </div>
                <div>
                    <label>password</label>
                    <input type="password" name="password" placeholder="password">
                </div>
                <div>
                    <input type="submit" value="save the detatiles">
                </div>
            </form>
        </center>
    </body>
@endsection
