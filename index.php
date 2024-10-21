<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style/login.css">
    <script type="module" src="login.js" defer></script>
    <script type="module" src="auth.js"></script>
</head>
<body>
    <div class="login-container">
        <form id="login-form">
            <div class="logo-container">
                <img src="./Asset/logo.png" alt="" width="300" height="120">
            </div>
            <label for="email" require>Username</label>
            <input type="email" name="email" id="email" placeholder="Enter your email"><br>
            <label for="password" require>Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <button id="submit" type="button">Login</button>
        </form>
    </div>
</body>
</html>
