<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h2>workers</h2>
        {{-- store the infromation --}}
        @if (session('success'))
            <div style="color:green;">
                {{ session('success') }}
            </div>
        @endif
        {{-- update infromation --}}
        @if (session('meaasge'))
            <div style="color:red">
                {{ session('success') }}
            </div>
            {{-- delete infromation     --}}
        @endif
        @if (session('delete'))
            <div style="color:green">
                {{ session('delete') }}
            </div>
        @endif
        @if (session('not'))
            <div style='color:red'>
                {{ session('not') }}
            </div>
        @endif
        <div>
            <a href="{{ route('worker.create', ['worker' => $worker]) }}" <div>
                <div>
                    <table border="2">
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>age</th>
                            <th>mobile</th>
                            <th>edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach ($worker as $worker)
                            <tr>
                                <td>{{ $worker->id }}</td>
                                <td>{{ $worker->name }}</td>
                                <td>{{ $worker->age }}</td>
                                <td>{{ $worker->mobile }}</td>
                                <td>
                                    <a href="{{ route('worker.edit', ['worker' => $worker]) }}">edit</a>
                                </td>

                                <td>
                                    <form method="POST" action="{{ route('worker.destroy', ['worker' => $worker]) }}">
                                        @csrf
                                        @method('delete') <!--for security purpose-->
                                        <input type="submit" value="delete!">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <center>
</body>

</html>
