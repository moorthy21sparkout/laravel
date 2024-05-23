<h1>Login Form</h1>
<form action="user" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="password">password</label>
        <input type="password" name="password" id="password">
    </div>
    <button type="submit">Login</button>
</form>
