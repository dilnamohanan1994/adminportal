<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h2>Admin Login</h2>
    <form method="POST" action="/login">
        @csrf
        <input name="username" placeholder="Username" required>
        <input name="password" type="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    @error('username') <p>{{ $message }}</p> @enderror
</body>
</html>
