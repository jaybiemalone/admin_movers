<?php
include 'db.php';  // Include your database connection

// Check if the form has been submitted using POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ensure the 'username' and 'password' fields are set in the POST request
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // SQL query to check if the user exists
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        // Delay for 2 seconds to simulate loading
        sleep(2);  // Pause for 2 seconds

        // Check if user exists
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify the password securely using password_verify (for hashed passwords)
            if (password_verify($password, $user['password'])) {
                // Successful login, redirect to dashbord.php
                header("Location: dashbord.php");  // Redirect to dashbord.php
                exit();  // Make sure the script stops executing after the redirect
            } else {
                // Incorrect password handling, redirect with error
                header("Location: login.php?error=incorrect_password");  // Redirect with error
                exit();
            }
        } else {
            // Username not found handling, redirect with error
            header("Location: login.php?error=username_not_found");  // Redirect with error
            exit();
        }
    }
}
?>
