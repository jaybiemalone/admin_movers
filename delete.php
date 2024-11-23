<?php
include 'db.php'; // Include database connection

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize ID input

    // Fetch the file details from the database
    $stmt = $conn->prepare("SELECT file_path FROM pdf_files WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $file_path = $row['file_path'];

        // Delete the file from the server
        if (file_exists($file_path)) {
            unlink($file_path); // Deletes the file
        }

        // Remove the record from the database
        $stmt = $conn->prepare("DELETE FROM pdf_files WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        header("Location: document.php?message=File+Deleted+Successfully");
        exit;
    } else {
        echo "File not found in the database.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
