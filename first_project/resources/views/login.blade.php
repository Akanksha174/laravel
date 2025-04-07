<form method="post" action="/login">
    @csrf
    Enter Username:
    <input type="text" name="username"><br>
    Enter Password:
    <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>