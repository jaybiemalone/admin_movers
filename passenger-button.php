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
            <li>
                <a href="document.php">
                    <i class='bx bx-folder-open'></i>
                    <span>Document</span>
                </a>
            </li>
            <li class="active">
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
            <li>
                <a href="document.php">
                    <i class='bx bx-folder-open'></i>
                    <span>Document</span>
                </a>
            </li>
            <li class="active">
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
                <a href="dashbord.php">
                    <span>Home</span>
                </a>
                <i class='bx bx-chevron-right'></i>
                <a href="legal.php#">
                    <span>Legal Compliance</span>
                </a>
                <i class='bx bx-chevron-right'></i>
                <a href="monitoring.php">
                    <span>Monitoring</span>
                </a>
                <i class='bx bx-chevron-right'></i>
                <span>Passenger</span>
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
        <div class="legal-monitoring-passenger">
            <div class="passenger-container">
                <div class="top">
                    <h3>Passenger</h3>
                </div>
                <div class="bottom">
                    <div class="passenger-log-container">
                    <?php
            // Include database connection po
            include 'db.php';

            // Query to retrieve passenger data
            $sql = "SELECT user, id, email, ticket, dstatus, dtext , ddate FROM passenger"; // Update 'your_table_name' with actual table name
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // Start table HTML
                echo '<table style="width:100%; text-align: center;">
                        <tr>
                            <td><h3>User</h3></td>
                            <td><h3>ID</h3></td>
                            <td><h3>Email</h3></td>
                            <td><h3>Ticket</h3></td>
                            <td><h3>Status</h3></td>
                            <td style="display: none;">text</td>
                            <td><h3>Date</h3></td>
                            <td><h3>Action</h3></td>
                        </tr>';

                // Loop through the query results and display each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$row['user']}</td>
                            <td>{$row['id']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['ticket']}</td>
                            <td>{$row['dstatus']}</td>
                            <td>{$row['dtext']}</td>
                            <td>{$row['ddate']}</td>
                            <td><button onclick='showDetails({$row['id']})'>Show</button></td>
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
        <div id="detailsModal" class="modal" style="display: none;">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>Passenger Details</h2>
            <a href="#">Action</a>
        <div id="modalDetails">
        </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./javascript/passenger-details.js"></script>
</body>

</html>