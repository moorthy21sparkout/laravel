@if ($errors->any())
    <ul>
        {!! implode('', $errors->all('<li>:message</li>')) !!}
    </ul>
@endif
<form action="authendication" method="POST">
    <label for="">Email<input type="email" name="email"></label><br>
    <label for="">Password<input type="password" name="password"></label>
    <button type="submit" value="login">Login</button>
    @csrf
</form>
