<?php
include 'db.php';

// SQL query to count rows
$stmt = $conn->prepare("SELECT COUNT(*) AS total_rows FROM task_management");
$stmt->execute();
$count_result = $stmt->get_result();
$total_rows = 0;

if ($count_result->num_rows > 0) {
    $row = $count_result->fetch_assoc();
    $total_rows = $row['total_rows'];
} else {
    $total_rows = 0;
}
$stmt->close();

// Fetch all rows for display
$sql = "SELECT * FROM task_management";
$result = $conn->query($sql);
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
            <li>
                <button onclick="toggleSubMenu(this)" class="dropdown-btn">
                    <i class='bx bx-taxi'></i>
                    <span>My Files</span>
                    <i class='bx bx-chevron-right'></i>
                </button>
                <ul class="sub-menu">
                    <div>
                        <li><a href="document.php">Document</a></li>
                        <li><a href="template-files.php">Template</a></li>
                        <li><a href="marketing-files.php">Marketing</a></li>
                        <li><a href="project-files.php">Projects</a></li>
                    </div>
                </ul>
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
                <button onclick="toggleSubMenu(this)" class="dropdown-btn">
                    <i class='bx bx-sitemap'></i>
                    <span>Maintenance</span>
                    <i class='bx bx-chevron-right'></i>
                </button>
                <ul class="sub-menu">
                    <div>
                        <li><a href="issue-maintenance.php">Issue</a></li>
                        <li><a href="task-management.php">Task</a></li>
                        <li><a href="inbox-management.php">Inbox</a></li>
                    </div>
                </ul>
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
            <li>
                <button onclick="toggleSubMenu(this)" class="dropdown-btn">
                    <i class='bx bx-taxi'></i>
                    <span>My Files</span>
                    <i class='bx bx-chevron-right'></i>
                </button>
                <ul class="sub-menu">
                    <div>
                        <li><a href="document.php">Document</a></li>
                        <li><a href="template-files.php">Template</a></li>
                        <li><a href="marketing-files.php">Marketing</a></li>
                        <li><a href="project-files.php">Projects</a></li>
                    </div>
                </ul>
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
                <button onclick="toggleSubMenu(this)" class="dropdown-btn">
                    <i class='bx bx-sitemap'></i>
                    <span>Maintenance</span>
                    <i class='bx bx-chevron-right'></i>
                </button>
                <ul class="sub-menu">
                    <div>
                        <li><a href="issue-maintenance.php">Issue</a></li>
                        <li><a href="task-management.php">Task</a></li>
                        <li><a href="inbox-management.php">Inbox</a></li>
                    </div>
                </ul>
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
                <span>Maintenance</span>
                <i class='bx bx-chevron-right'></i>
                <span>Task</span>
            </div>
            <div class="log-out">
                <button id="toggleBtn"><i class='bx bx-cog'></i></button>
                <div id="logout" class="hidden">
                    <p style="padding-top: 5px;"><a href="index.php">Log out</a></p>
                </div>
            </div>
            <div class="display-menu">
                <button style="display: none;" id="sidebtn"><i class='bx bx-menu bx-rotate-180' ></i></button>
            </div>
        </nav>
        <div class="task-content">
            <div class="top">
                <div class="box">
                    <div class="task-name">
                        <h1>Task List</h1>
                    </div>
                    <div class="button">
                        <input type="search">
                        <span class="material-symbols-outlined">search</span>
                        <button>Add Task</button>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="box">
                    <div class="card">
                        <h1>Not Started</h1>
                        <span>0</span>
                        <img src="./Asset/waiting.gif" alt="" width="40">
                    </div>
                    <div class="card">
                        <h1>Started</h1>
                        <span>0</span>
                        <img src="./Asset/waiting.gif" alt="" width="40">
                    </div>
                    <div class="card">
                        <h1>In Progress</h1>
                        <span>0</span>
                        <img src="./Asset/waiting.gif" alt="" width="40">
                    </div>
                    <div class="card">
                        <h1>Completed</h1>
                        <span>0</span>
                        <img src="./Asset/waiting.gif" alt="" width="40">
                    </div>
                </div>
                <div class="box">
                <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<div class=\"task-box\">";
                            
                            echo "<ul>";
                            echo "<li>" . htmlspecialchars($row['category']) . "</li>";
                            echo "</ul>";

                            echo "<ul>";
                            echo "<li>" . htmlspecialchars($row['label']) . "</li>";
                            echo "</ul>";

                            echo "<ul>";
                            echo "<li>" . htmlspecialchars($row['description']) . "</li>";
                            echo "</ul>";

                            echo "<ul>";
                            echo "<li> Start Date: " . htmlspecialchars($row['date-task']) . "</li>";
                            echo "</ul>";

                            echo "<ul>";
                            echo "<li> People assign: " . htmlspecialchars($row['member']) . "</li>";
                            echo "</ul>";

                            echo "<ul>";
                            echo "<li><button>Start</button></li>";
                            echo "</ul>";

                            echo "</div>";
                        }
                    } else {
                        echo "<p>No issues found.</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>