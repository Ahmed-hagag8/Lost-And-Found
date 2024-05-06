<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        /* Styles for the register form */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('css/images/reg_background.png'); /* Path to your background image */
            background-size: cover;
            background-position: center;
        }
        
        .register-container {
            background-color: rgba(255, 255, 255, 0.496);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            max-width: 100%;
            text-align: center;
        }
        
        .register-container h2 {
            margin-bottom: 20px;
            color: #333;
        }
        
        .register-form input[type="text"],
        .register-form input[type="email"],
        .register-form input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        
        .register-form input[type="text"]:focus,
        .register-form input[type="email"]:focus,
        .register-form input[type="password"]:focus {
            outline: none;
            border-color: #c20000;
        }
        
        .register-form button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background-color: #c20000;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .register-form button:hover {
            background-color: #c20000;
        }
        
        .register-form p {
            margin-top: 15px;
            color: #000000;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form class="register-form" action="{{ Route('register.submet') }}" method="post" >
            @csrf
            <input type="text" name="name" placeholder="name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
            <p class="register__login">
                Already have an account? <a href="/">Login</a>
            </p>
        </form>
    </div>
</body>
</html>
