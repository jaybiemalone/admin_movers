<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style/login.css">
</head>
<body>
    <div class="login-container">
        <form id="login-form">
            <div class="logo-container">
                <img src="./Asset/logo.png" alt="Logo" width="300" height="120">
            </div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" required><br>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required><br>

            <button id="submit" type="submit">Login</button><br>
            <a href="register.php">Don't have an account? Register here</a>
        </form>

        <!-- Error/success messages -->
        <div id="response-message" style="display: none;"></div>
    </div>

    <script>
        // JavaScript to handle form submission and AJAX request
        document.getElementById("login-form").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent default form submission

            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;
            const responseMessage = document.getElementById("response-message");

            // Show loading message
            responseMessage.style.display = "block";
            responseMessage.innerHTML = "Loading...";

            // AJAX request
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "login.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function() {
                if (xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText); // Parse the response from the server
                    responseMessage.style.display = "none"; // Hide loading message

                    if (response.status === "success") {
                        // Redirect to the dashboard on successful login
                        window.location.href = "dashbord.php";
                    } else {
                        // Display error message
                        responseMessage.style.display = "block";
                        responseMessage.innerHTML = "Invalid username or password.";
                    }
                } else {
                    // Handle unexpected server error
                    responseMessage.style.display = "block";
                    responseMessage.innerHTML = "An error occurred. Please try again.";
                }
            };

            xhr.onerror = function() {
                // Handle network or connection errors
                responseMessage.style.display = "block";
                responseMessage.innerHTML = "Unable to connect to the server.";
            };

            // Send the username and password to the server
            xhr.send(
                "username=" + encodeURIComponent(username) +
                "&password=" + encodeURIComponent(password)
            );
        });
    </script>
</body>
</html>
