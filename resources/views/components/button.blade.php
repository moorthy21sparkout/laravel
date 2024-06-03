<div class="text-center">
    <div>
        <label for="">name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">age</label>
        <input type="text" name="age">
    </div>
    <div>
        <label for="">password</label>
        <input type="password" name="password">
    </div>
    <x-link type="error" message="$message" class="mt-4" />
</div>
<h2>{{ $name }}</h2>
