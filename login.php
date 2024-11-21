<?php
include 'db.php';  // Include your database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Simulate a 2-second delay
        sleep(2);

        // SQL query to check if the user exists
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        // Prepare response
        $response = array();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify password
            if (password_verify($password, $user['password'])) {
                $response['status'] = 'success';
            } else {
                $response['status'] = 'error';
                $response['message'] = 'Invalid password.';
            }
        } else {
            $response['status'] = 'error';
            $response['message'] = 'No user found.';
        }

        // Send JSON response
        echo json_encode($response);
        $stmt->close();
        $conn->close();
    }
}
?>
