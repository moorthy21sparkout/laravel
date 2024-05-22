<h2>table informatoion</h2>
<table border="3">
    <tr>
        <td><b>id</b></td>
        <td><b>name</b></td>
        <td><b>age</b></td>
        <td><b>email</b></td>
    </tr>
    @foreach ($members as $member)
        <tr>
            <td>{{ $member['id'] }}</td>
            <td>{{ $member['name'] }}</td>
            <td>{{ $member['age'] }}</td>
            <td>{{ $member['email'] }}</td>

        </tr>
    @endforeach

</table>
<span>
    {{-- the link()"Previous", "Next", --}}
    {{$members->links()}}
</span>
<style>
    /* .w-5 is the class selector */
    .w-5{
        display: none;
    }
    table {
        width: 60%; /* Set table width to 100% */
    }
</style>
