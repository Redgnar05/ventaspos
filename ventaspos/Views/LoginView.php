
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="http://localhost/ventaspos/Views/css/stylesLoginView.css">
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <form>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <input type="checkbox" id="remember-me" name="remember-me">
                <label for="remember-me" class="checkbox-label">Remember me</label>
            </div>
            <div class="button-group">
                <button type="submit" class="login">Login</button>
                <button type="button" class="signup">Sign up</button>
            </div>
        </form>
    </div>
</body>
</html>























