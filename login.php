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

        // Simulate a 2-second loading delay
        sleep(2);

        // Response array
        $response = array('status' => 'error'); // Default to error

        // Check if user exists
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify the password securely using password_verify (for hashed passwords)
            if (password_verify($password, $user['password'])) {
                $response['status'] = 'success';
            }
        }

        // Send the response as JSON
        echo json_encode($response);
    }
}
?>
