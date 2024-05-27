@if ($errors->any())
    <ul>
        {!! implode('', $errors->all('<li>:message</li>')) !!}
    </ul>
@endif
<form action="store" method="POST">
    @csrf
    <label for="">name</label>
    <input type="text" name="name" placeholder="enter the name">
    <br><br>
    <label for="">email</label>
    <input type="email" name="email" placeholder="enter the mail id">
    <br><br>
    <label for="">Password</label>
    <input type="password" name="password" placeholder="enter the password">
    <br><br>
    <label for="">Conform Password</label>
    <input type="password" name="password_confirmation" placeholder="Conform password">
    <br><br>
    <button type="submit" value="Regsister">Reegsister Now !</button>


</form>
