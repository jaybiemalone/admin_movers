<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style/login.css">
    <script src="./javascript/login.js" defer></script> <!-- Link to the login.js script -->
</head>
<body>
    <div class="login-container">
        <form id="login-form" method="POST" action="login.php">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Enter your username" required><br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" required><br>

        <button id="submit" type="submit">Login</button>
        </form>
        <div id="response-message"></div> <!-- This will show loading and error/success messages -->
    </div>
</body>
</html>

