<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
    <style>
        body
        {
            background-image: url('css/images/reg_background.png'); /* Path to your background image */
            background-size: cover;
            background-position: center;
        }
    </style>



    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="/submit" method="POST">
                @csrf <!-- Laravel CSRF protection -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit">Login</button>
                </div>
            </form>
            <p>Don't have an account? <a href="/register">Register</a></p>
        </div>
    </div>
</body>
</html>
