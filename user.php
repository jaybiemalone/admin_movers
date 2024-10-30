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
                        <ul>
                            <li><label for="role">Role
                                <select name="role" id="role">
                                    <option value="">All</option>
                                    <option value="">All</option>
                                    <option value="">All</option>
                                </select>
                            </label></li>
                            <li>
                                <label for="position">Position
                                <select name="position" id="position">
                                    <option value="">All</option>
                                    <option value="">All</option>
                                    <option value="">All</option>
                                </select>
                            </label></li>
                            <li>
                                <label for="team">Team
                                <select name="team" id="team">
                                    <option value="">All</option>
                                    <option value="">All</option>
                                    <option value="">All</option>
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
                        <?php
            // Include database connection po   
            include 'db.php';

            // Query to retrieve passenger data
            $sql = "SELECT dname, drole, dphone, dposition, drate, dteam, droom FROM user"; // Update 'your_table_name' with actual table name
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // Start table HTML
                echo '<table style="width:100%; text-align: center;" cellspacing="0">
                                <tr>
                                    <td>Full Name/ Phone</td>
                                    <td>Role</td>
                                    <td>Position/Rate</td>
                                    <td>Team</td>
                                    <td>Room</td>
                                    <td></td>
                                </tr>';

                // Loop through the query results and display each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$row['dname']}<br><span>{$row['dphone']}</span></td>
                            <td>{$row['drole']}</td>
                            <td>{$row['dposition']}<br><span>{$row['drate']}</span></td>
                            <td>{$row['dteam']}</td>
                            <td>{$row['droom']}</td>
                            <td><button>Edit</button><button>Delete</button></td>
                          </tr>";
                }

                // End table HTML
                echo '</table>';
            } else {
                echo "<p>No results found.</p>";
            }

            // Close the connection
            mysqli_close($conn);
        ?>
                        </ul>
                        <div id="user-Modal" class="user-modal">

                        <!-- user-Modal Content -->
                        <div class="user-modal-content">
                            <span class="user-modal-close">&times;</span>
                            <div class="choices">
                                <button id="add-employee"  class="add-employee">Employee</button>
                                <button id="add-work" class="add-work">Work</button>
                                <button id="add-vacation" class="add-vacation">Vacation</button>
                            </div>
                            <div id="add-employee-content" class="add-employee-content">
                            <div class="top">
                                <div class="left-profile"></div>
                                <div class="right-information"></div>
                            </div>
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
                                            <option value="">User</option>
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
                                        <label for="">Phone number</label><br>
                                        <select name="" id="">
                                            <option value="">+43</option>
                                            <option value="">+63</option>
                                            <option value="">+45</option>
                                            <option value="">+75</option>
                                            <option value="">+24</option>
                                            <option value="">+54</option>
                                            <input type="text">
                                        </select>
                                    </div>
                                    <div class="info">
                                        <h1>Team</h1>
                                        <label for="">team</label><br>
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
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div id="add-work-content" class="add-work-content" style="display: none;">Work
                            </div>
                            <div id="add-vacation-content" class="add-vacation-content" style="display: none;">vacation
                            </div>
                        </div>
                        <!-- user-Modal Content end-->
                    </div>
                </div>
        </div>
                <div id="content2" class="content" style="display: none;">
                </div>
            </div>
        </div>
    </div>
    <script src="./javascript/user-container.js"></script>
</body>
</html>



            