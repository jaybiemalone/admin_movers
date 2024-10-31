<?php
session_start(); // Start the session
include 'db.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $uploadDirectory = 'uploads/';

    // Create uploads directory if it doesn't exist
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    // Get the file details
    $fileName = $_FILES['docu_file']['name'];
    $fileTmpName = $_FILES['docu_file']['tmp_name'];
    $fileType = $_FILES['docu_file']['type'];

    // Check if the file is a PDF
    $allowedType = 'application/pdf';
    if ($fileType !== $allowedType) {
        die("Error: Only PDF files are allowed.");
    }

    // Define the upload path
    $uploadPath = $uploadDirectory . basename($fileName);

    // Upload the file and save to database if successful
    if (move_uploaded_file($fileTmpName, $uploadPath)) {
        $stmt = $conn->prepare("INSERT INTO pdf_files (file_name, file_path) VALUES (?, ?)");
        $stmt->bind_param("ss", $fileName, $uploadPath);

        if ($stmt->execute()) {
            // Set a success message
            $_SESSION['success_message'] = "PDF uploaded successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error uploading the PDF.";
    }

    // Redirect to the same page to avoid resubmission
    header("Location: " . $_SERVER['PHP_SELF']);
    exit(); // Make sure to exit after the redirect
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movers.com</title>
    <link rel="icon" href="/Asset/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./style/index.css">
    <script type="text/javascript" src="app.js" defer></script>
    <script type="text/javascript" src="click.js" defer></script>
    <script type="text/javascript" src="sidebar.js" defer></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="sidebar2" style="display: none;" id="sideshow">
        <ul>
            <li>
                <div class="Logo">
                    <img src="./Asset/logo.png" alt="" width="180" height="62">
                    <button onclick=toggleSidebar() id="toggle-btn">
                    </button>
                </div>
            </li>
            <li>
                <a href="dashbord.php">
                    <i class='bx bxs-dashboard'></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <button onclick="toggleSubMenu(this)" class="dropdown-btn">
                    <i class='bx bx-taxi'></i>
                    <span>Trip Management</span>
                    <i class='bx bx-chevron-right'></i>
                </button>
                <ul class="sub-menu">
                    <div>
                        <li><a href="upcomingtrips.php">Upcoming Trips</a></li>
                        <li><a href="triphistory.php">Tips history</a></li>
                        <li><a href="trips.php">Trips</a></li>
                    </div>
                </ul>
            </li>
            <li>
                <a href="user.php">
                    <i class='bx bx-user'></i>
                    <span>User</span>
                </a>
            </li>
            <li>
                <a href="facility.php">
                    <i class='bx bxs-car-garage'></i>
                    <span>Facility</span>
                </a>
            </li>
            <li class="active">
                <a href="document.php">
                    <i class='bx bx-folder-open'></i>
                    <span>Document</span>
                </a>
            </li>
            <li>
                <a href="legal.php">
                    <i class='bx bx-file'></i>
                    <span>Legal Compliance</span>
                </a>
            </li>
            <li>
                <a href="contract.php">
                    <i class='bx bxs-edit'></i>
                    <span>Contract</span>
                </a>
            </li>
            <li>
                <a href="maintenance.php">
                    <i class='bx bx-sitemap'></i>
                    <span>Maintenance</span>
                </a>
            </li>
            <li>
                <a href="index.php">
                    <i class='bx bx-user-circle bx-rotate-180' ></i>
                    <span>Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar">
        <ul>
            <li>
                <div class="Logo">
                    <img src="./Asset/logo.png" alt="" width="180" height="62">
                    <button onclick=toggleSidebar() id="toggle-btn">
                    </button>
                </div>
            </li>
            <li>
                <a href="dashbord.php">
                    <i class='bx bxs-dashboard'></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <button onclick="toggleSubMenu(this)" class="dropdown-btn">
                    <i class='bx bx-taxi'></i>
                    <span>Trip Management</span>
                    <i class='bx bx-chevron-right'></i>
                </button>
                <ul class="sub-menu">
                    <div>
                        <li><a href="upcomingtrips.php">Upcoming Trips</a></li>
                        <li><a href="triphistory.php">Tips history</a></li>
                        <li><a href="trips.php">Trips</a></li>
                    </div>
                </ul>
            </li>
            <li>
                <a href="user.php">
                    <i class='bx bx-user'></i>
                    <span>User</span>
                </a>
            </li>
            <li>
                <a href="facility.php">
                    <i class='bx bxs-car-garage'></i>
                    <span>Facility</span>
                </a>
            </li>
            <li class="active">
                <a href="document.php">
                    <i class='bx bx-folder-open'></i>
                    <span>Document</span>
                </a>
            </li>
            <li>
                <a href="legal.php">
                    <i class='bx bx-file'></i>
                    <span>Legal Compliance</span>
                </a>
            </li>
            <li>
                <a href="contract.php">
                    <i class='bx bxs-edit'></i>
                    <span>Contract</span>
                </a>
            </li>
            <li>
                <a href="maintenance.php">
                    <i class='bx bx-sitemap'></i>
                    <span>Maintenance</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="main-content">
        <nav>
            <div class="logo-nav-container">
                <img src="./Asset/logo.png" alt="" width="120" height="40">
            </div>
            <div class="leftbar">
                <button>
                    <i class='bx bx-home-alt-2'></i>
                </button>
                <a href="index.php">
                    <span>Home</span>
                </a>
                <i class='bx bx-chevron-right'></i>
                <span>Document</span>
            </div>
            <div class="log-out">
                <button id="toggleBtn"><i class='bx bx-cog' ></i></button>
                <div id="logout" class="hidden">
                    <p style="padding-top: 5px;"><a href="index.php">Log out</a></p>
                </div>
            </div>
            <div class="display-menu">
                <button style="display: none;" id="sidebtn"><i class='bx bx-menu bx-rotate-180' ></i></button>
            </div>
        </nav>
        <div class="document-content">
            <div class="document-upload">
            <form method="post" enctype="multipart/form-data">
                    <ul>
                        <li><h1>Upload Document</h1></li>
                        <li>
                            <label for="">Document Title</label>
                            <input type="text" name="document_title" placeholder="Enter Document Title" required>
                        </li>
                        <li>
                            <label for="">Upload Document</label>
                            <input type="file" id="docu_file" name="docu_file" accept="application/pdf" required>
                        </li>
                        <li><button type="submit" name="submit">Upload Document</button></li>
                    </ul>
                </form>
            </div>
            <div class="document-container">
                <div class="document-title">
                    <h1>Document</h1>
                </div>
                <div class="document-history">
                    <ul>
                        <li><label for="document-page">Select Page</label>
                            <Select id="document-page">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                            <option value="">6</option>
                            <option value="">7</option>
                            <option value="">8</option>
                        </Select></li>
                    </ul>
                    <table style="width: 100%;">
                        <tr>
                            <td>Document Name</td>
                            <td>Uploaded At</td>
                            <td>Time</td>
                            <td>Action</td>
                        </tr>
                    </table>
                    <ul>
                        <?php
                        // Fetch uploaded PDFs from database
                        $result = $conn->query("SELECT * FROM pdf_files");
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<li><a href='{$row['file_path']}' download>{$row['file_name']}</a></li>";
                            }
                        } else {
                            echo "<p>No PDFs found.</p>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php

$conn->close();
?>