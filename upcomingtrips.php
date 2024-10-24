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
                        <li class="active"><a href="upcomingtrips.php">Upcoming Trips</a></li>
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
                    <i class='bx bxs-dashboard' ></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <button onclick="toggleSubMenu(this)" class="dropdown-btn">
                    <i class='bx bx-taxi' ></i>
                    <span>Trip Management</span>
                    <i class='bx bx-chevron-right' ></i>
                </button>
                <ul class="sub-menu">
                    <div>
                        <li class="active"><a href="upcomingtrips.php">Upcoming Trips</a></li>
                        <li><a href="triphistory.php">Tips history</a></li>
                        <li><a href="trips.php">Trips</a></li>
                    </div>
                </ul>
            </li>
            <li>
                <a href="user.php">
                    <i class='bx bx-user' ></i>
                    <span>User</span>
                </a>
            </li>
            <li>
                <a href="communication.php">
                    <i class='bx bx-chat' ></i>
                    <span>Communication</span>
                </a>
            </li>
            <li>
                <a href="facility.php">
                    <i class='bx bxs-car-garage' ></i>
                    <span>Facility</span>
                </a>
            </li>
            <li>
                <a href="document.php">
                    <i class='bx bx-folder-open' ></i>
                    <span>Document</span>
                </a>
            </li>
            <li>
                <a href="legal.php">
                    <i class='bx bx-file' ></i>
                    <span>Legal Compliance</span>
                </a>
            </li>
            <li>
                <a href="contract.php">
                    <i class='bx bxs-edit' ></i>
                    <span>Contract</span>
                </a>
            </li>
            <li>
                <a href="maintenance.php">
                    <i class='bx bx-sitemap' ></i>
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
                <span>Upcoming Trips</span>
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
        <div class="upcoming-container">
            <div class="upcoming-box">
                <div class="top-box">
                    <h3>Upcoming Trips List</h3>
                </div>
                <div class="bottom-box">
                    <div class="top-content">
                        <ul>
                            <li class="active"><a href="upcomingtrips.html"><button class="callendar-button">Today</button></a></li>
                            <li><a href="callendar-Aug.html"><button class="callendar-button">Aug</button></a></li>
                            <li><a href="callendar-sept.html"><button class="callendar-button">Sept</button></a></li>
                            <li><a href="callendar-oct.html"><button class="callendar-button">Oct</button></a></li>
                            <li><a href="callendar-nov.html"><button class="callendar-button">Nov</button></a></li>
                            <li><a href="callendar-dec.html"><button class="callendar-button">Dec</button></a></li>
                        </ul>
                        <ul>
                            <li><button class="callendar-button">Calendar</button></li>
                            <li><button class="callendar-button">Appointment</button></li>
                        </ul>
                        <div class="callendar-content">
                            <div class="callendar-date">
                                <div class="callendar-text-left"></div>
                                <div class="callendar-text-right"></div>
                            </div>
                            <div class="callendar-date"></div>
                            <div class="callendar-date"></div>
                            <div class="callendar-date"></div>
                        </div>
                    </div>
                    <div class="bottom-content">
                        <div class="left-date">
                            <div class="callendar-box">
                                <h3>16</h3>
                                <p>Aug</p>
                            </div>
                            <div class="callendar-box">
                                <h3>23</h3>
                                <p>Aug</p>
                            </div>
                            <div class="callendar-box">
                                <h3>1</h3>
                                <p>Sept</p>
                            </div>
                            <div class="callendar-box">
                                <h3>13</h3>
                                <p>Sept</p>
                            </div>
                        </div>
                        <div class="right-details-date">
                            <div class="callendar-box">
                                <h3>Novaliches Plaza Mall</h3>
                                <p>₱130.00 - ₱200.00 Per Person</p>
                            </div>
                            <div class="callendar-box">
                                <h3>Bestlink College of The Philippines</h3>
                                <p>₱85.00 - ₱130.00 Per Person</p>
                            </div>
                            <div class="callendar-box">
                                <h3>SM Hypermarket Monumento</h3>
                                <p>₱160.00 - ₱220.00 Per Person</p>
                            </div>
                            <div class="callendar-box">
                                <h3>121 Bagumbayan, Bulacan, Bulacan</h3>
                                <p>₱230.00 - ₱287.00 Per Person</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>