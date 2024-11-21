<?php
include 'db.php';  // Include the database connection

$error = "";  // Variable to store error messages
$success = "";  // Variable to store success messages

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the username already exists
    $checkUserSQL = "SELECT id FROM users WHERE username = ?";
    $checkStmt = $conn->prepare($checkUserSQL);
    $checkStmt->bind_param("s", $username);
    $checkStmt->execute();
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {
        $error = "Username is already taken.";
    } else {
        // Check if the email already exists
        $checkEmailSQL = "SELECT id FROM users WHERE email = ?";
        $checkEmailStmt = $conn->prepare($checkEmailSQL);
        $checkEmailStmt->bind_param("s", $email);
        $checkEmailStmt->execute();
        $checkEmailStmt->store_result();

        if ($checkEmailStmt->num_rows > 0) {
            $error = "Email is already registered.";
        } else {
            // If username and email are unique, hash the password and insert the user
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $username, $email, $hashed_password);

            if ($stmt->execute()) {
                $success = "Registration successful! You can now <a href='index.php'>log in</a>.";
            } else {
                $error = "Registration failed. Please try again.";
            }

            $stmt->close();
        }
        $checkEmailStmt->close();
    }

    $checkStmt->close();
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
            background-color: rgb(8, 61, 160);
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
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
        <h2>Register</h2>
        <form id="register-form" method="POST" action="">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" required><br>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required><br>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required><br>

            <button id="submit" type="submit">Register</button><br><br>
            <a href="index.php" style="margin-left: 180px;">Back</a>
        </form>

        <div class="response-message">
            <?php if (!empty($error)): ?>
                <p class="response-message error"><?= $error; ?></p>
            <?php elseif (!empty($success)): ?>
                <p class="response-message success"><?= $success; ?></p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>

