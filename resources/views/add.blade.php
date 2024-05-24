<h1>Add Members</h1>
<form action="addmember" method="POST">
    @csrf
    {{-- @if ({{session('success')}})
        <h4 style="color:green">{{session('success')}}</h4>
    @endif --}}
    @if (isset($success))
        <h4 style="color:green">{{  $success }}</h4>
    @endif
    <div>
        <label>Enter the name</label>
        <input type="text" name="user" placeholder="enter the name">
    </div>
    
    <br>
    <div>
        <label>Enter the password</label>
        <input type="password" name="password" placeholder="enter the password">
    </div>
    <br>
    <div>
        <label>Enter the email</label>
        <input type="email" name="email" placeholder="enter the email">
    </div>
    <br>
    <button type="submit">sumit</button>
</form>
