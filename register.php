<?php
include 'db.php';  // Include the database connection

// Ensure you're receiving data from the form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];  // Match the form input name
    $email = $_POST['email'];        // Match the form input name
    $password = $_POST['password'];  // Match the form input name

    // Hash the password before storing it in the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert the new user into the database
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $hashed_password);
    $stmt->execute();

    // Check if the insertion was successful
    if ($stmt->affected_rows > 0) {
        // After a successful registration, just reload the page (or you can redirect to login if you prefer)
        header("Location: register.php");  // Reload the page after successful registration
        exit();
    } else {
        // If there is an error, you can reload the page and add a query string for error (optional)
        header("Location: register.php?error=registration_failed");  // Pass error via URL
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./style/login.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 400px;
        }
        .register-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .register-container label {
            font-size: 16px;
            margin-bottom: 8px;
            display: block;
        }
        .register-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ddd;
            font-size: 16px;
        }
        .register-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .register-container button:hover {
            background-color: #45a049;
        }
        .response-message {
            text-align: center;
            margin-top: 10px;
        }
        .response-message.success {
            color: green;
        }
        .response-message.error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="register-container">
            <form id="register-form" method="POST" action="register.php">
            <div class="logo-container">
                <img src="./Asset/logo.png" alt="Logo" width="300" height="120">
            </div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" required><br>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required><br>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required><br>

            <button id="submit" type="submit">Register</button><br><br>
            <a href="index.php" style=" margin-left: 180px;">back?</a>
        </form>

        <div id="response-message"></div>
    </div>
</body>
</html>
