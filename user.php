<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = new mysqli("localhost", "admin_nov", "gHvlCB%CK3kt*Jl^", "admin_movers");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $position = $_POST['position'] ?? '';
    $drole = $_POST['drole'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone_number = $_POST['phone_number'] ?? '';
    $team = $_POST['team'] ?? '';
    $ddescription = $_POST['ddescription'] ?? '';
    $file_path = "";

    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $file_path = $target_dir . basename($_FILES["file"]["name"]);
        if (!move_uploaded_file($_FILES["file"]["tmp_name"], $file_path)) {
            $file_path = "";
        }
    }

    $sql = $conn->prepare("INSERT INTO user_management (first_name, last_name, position, drole, email, phone_number, team, ddescription, uploaded_file_path) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $sql->bind_param("sssssssss", $first_name, $last_name, $position, $drole, $email, $phone_number, $team, $ddescription, $file_path);

    if ($sql->execute()) {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        echo "Error: " . $sql->error;
    }
    $sql->close();
    $conn->close();
}

// Fetch records for display
$conn = new mysqli("localhost", "admin_nov", "gHvlCB%CK3kt*Jl^", "admin_movers");
$sql = "SELECT * FROM user_management";
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
            <li class="active">
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
            <li class="active">
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
                <span>User</span>
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
        <div class="user-content">
            <div class="user-content-top">
                <div class="employees">
                    <h1>Employees <span style="font-size: 18px;" id="num-account">()</span></h1>
                </div>
                <div class="user-content-top-right">
                    <div class="user-search">
                        <input type="search" id="search" name="search"><label for="search"><i class='bx bx-search' style='color:#878484'></i></label>
                    </div>
                    <div class="user-export-salaries">
                        <a href="#">Export Salaries</a>
                    </div>
                    <div class="add-employee" id="user-open-modal">
                        <a href="#">Add Employee</a>
                    </div>
                </div>
            </div>
            <div class="user-container">
                <div class="choose">
                <button id="showContent1" class="show-button" ><h3>Personal</h3></button>
                <button id="showContent2" class="show-button" ><h3>Archive</h3></button>
                </div>
                <div id="content1" class="content">
                    <div class="select-option">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <ul>
                        <li><label for="role">Role
                        <select name="role" id="role">
                            <option value="">Select Role</option>
                            <option value="Driver">Driver</option>
                            <option value="Passenger">Passenger</option>
                            <option value="Employee">Employee</option>
                        </select>
                        </label></li>
                        <li><label for="position">Position
                            <select name="position" id="position">
                                <option value="">Select Position</option>
                                <option value="Operations Manager">Operations Manager</option>
                                <option value="Driver">Driver</option>
                            </select>
                        </label></li>
                        <li><label for="team">Team
                            <select name="team" id="team">
                                <option value="">Select Team</option>
                                <option value="Operations Team">Operations Team</option>
                                <option value="Customer Support Team">Customer Support Team</option>
                            </select>
                        </label></li>
                            <li>
                                <label for="location">Location
                                <select name="location" id="location">
                                    <option value="">All</option>
                                    <option value="">All</option>
                                    <option value="">All</option>
                                </select>
                            </label></li>
                        </ul>
                        <ul>
                        <table>
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Position</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Team</th>
                                    <th>Description</th>
                                    <th>Uploaded File</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result && $result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row['first_name'] . "</td>";
                                        echo "<td>" . $row['last_name'] . "</td>";
                                        echo "<td>" . $row['position'] . "</td>";
                                        echo "<td>" . $row['drole'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['phone_number'] . "</td>";
                                        echo "<td>" . $row['team'] . "</td>";
                                        echo "<td>" . $row['ddescription'] . "</td>";
                                        echo "<td>";
                                        if (!empty($row['uploaded_file_path'])) {
                                            echo "<a href='" . $row['uploaded_file_path'] . "' target='_blank'>View File</a>";
                                        } else {
                                            echo "No file uploaded";
                                        }
                                        echo "</td>";
                                        echo "<td>" . $row['created_at'] . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='11'>No records found.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        </ul>
                        <div id="user-Modal" class="user-modal">

                        <!-- user-Modal Content -->
                        <div class="user-modal-content">
                            <div class="choices">
                                <button id="add-employee"  class="add-employee">Employee</button>
                                <button id="add-work" class="add-work">Work</button>
                                <button id="add-vacation" class="add-vacation">Vacation</button>
                                <span class="user-modal-close">&times;</span>
                            </div>
                            <div id="add-employee-content" class="add-employee-content">
                            <div class="top">
                                <div class="left-profile"></div>
                                <div class="right-information"></div>
                            </div>
                            <form action="save_select" method="POST">
                            <div class="bottom">
                                <div class="left-icon">
                                    <input type="file" name="file" id="file" style="display: none;">
                                    <label for="file">Upload</label><br>
                                    <p>upload picture</p>
                                </div>
                                <div class="right-info">
                                    <div class="info">
                                        <label for="">First Name(requirements)</label>
                                        <input type="text" placeholder="First Name">
                                    </div>
                                    <div class="info">
                                        <label for="">Last Name(requirements)</label>
                                        <input type="text" placeholder="Last Name">
                                    </div>
                                    <div class="info">
                                        <label for="">Position</label><br>
                                        <select name="" id="">
                                            <option value=""></option>
                                            <option value="" disabled>Operations Team</option>
                                            <option value="">Operations Manager</option>
                                            <option value="">Dispatch Officer</option>
                                            <option value="">Fleet Manager</option>
                                            <option value="">Logistics Coordinator</option>
                                            <option value="" disabled>Driver Management Team</option>
                                            <option value="">Driver Recruitment Specialist</option>
                                            <option value="">Driver Relations Officer</option>
                                            <option value="">Driver Training Coordinator</option>
                                            <option value="">Compliance Officer</option>
                                            <option value="" disabled>Customer Support Team</option>
                                            <option value="">Customer Service Representative</option>
                                            <option value="">Escalation Specialist</option>
                                            <option value="">Customer Experience Manager</option>
                                            <option value="" disabled>Product and Technology Team</option>
                                            <option value="">Product Manager</option>
                                            <option value="">Software Engineer</option>
                                            <option value="">Data Analyst</option>
                                            <option value="">Quality Assurance Tester</option>
                                            <option value="" disabled>Marketing and Sales Team</option>
                                            <option value="">Marketing Manager</option>
                                            <option value="">Sales Executive</option>
                                            <option value="">Brand Ambassador</option>
                                            <option value="" disabled>Finance Team</option>
                                            <option value="">Finance Manager</option>
                                            <option value="">Payroll Officer</option>
                                            <option value="">Financial Analyst</option>
                                            <option value="" disabled>Compliance and Regulatory Team</option>
                                            <option value="">Compliance Manager</option>
                                            <option value="">Legal Counsel</option>
                                            <option value="">Safety & Risk Manager</option>
                                        </select>
                                    </div>
                                    <div class="info">
                                        <label for="">Role</label><br>
                                        <select name="" id="">
                                            <option value=""></option>
                                            <option value="">Driver</option>
                                            <option value="">Passenger</option>
                                            <option value="">Employee</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="bellow-employee-info">
                                    <div class="info">
                                        <h1>Contact</h1>
                                        <label for="">Email</label><br>
                                        <input type="email">
                                    </div>
                                    <div class="info">
                                        <label for="">Phone number</label><br><br>
                                            <input type="text">
                                    </div>
                                    <div class="info">
                                        <h1>Team</h1><br>
                                        <select name="" id="">
                                            <option value=""></option>
                                            <option value="">Operations Team</option>
                                            <option value="">Driver Management Team</option>
                                            <option value="">Customer Support Team</option>
                                            <option value="">Product and Technology Team</option>
                                            <option value="">Marketing and Sales Team</option>
                                            <option value="">Finance Team</option>
                                            <option value="">Compliance and Regulatory Team</option>
                                        </select>
                                    </div>
                                    <div class="info"><br>
                                        <h1>Description</h1>
                                        <textarea name="" id=""></textarea>
                                        <button type="submit" name="save_select" id="submit">Save</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                            </div>
                            <div id="add-work-content" class="add-work-content" style="display: none;">Work
                            </div>
                            <div id="add-vacation-content" class="add-vacation-content" style="display: none;">vacation
                            </div>
                        </div>
                        <!-- user-Modal Content end-->
                            </form>
                    </div>
                </div>
        </div>
                <div id="content2" class="content" style="display: none;">
                </div>
            </div>
        </div>
    </div>
    <script src="./javascript/user-container.js"></script>
    <script>
    // Modal handling for forms
    document.querySelectorAll('.choices button').forEach(button => {
        button.addEventListener('click', function() {
            document.querySelectorAll('.add-employee-content, .add-work-content, .add-vacation-content').forEach(content => {
                content.style.display = 'none';
            });
            const contentId = this.id + '-content';
            document.getElementById(contentId).style.display = 'block';
        });
    });
</script>
</body>
</html>

<?php
$conn->close();
?>

            