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
                <span>Legal Compliance</span>
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
        <div class="legal-main-content">
            <div class="legal-container">
                <div class="legal-box">
                    <div class="legal-boxbox1"><h4>Quick Access Navigation Bar</h4></div>
                    <div class="legal-boxbox2">
                        <a href="#">
                        <div class="complience-box">
                                <i class='bx bxs-user' style='color:#fff8f8' ></i>
                                <h4>My Control</h4>
                        </div>
                        </a>
                        <a href="monitoring.php">
                        <div class="complience-box">
                                <i class='bx bx-file' style='color:#fff8f8'  ></i>
                                <h4>Monitoring</h4>
                        </div>
                        </a>
                        <a href="#">
                        <div class="complience-box">
                                <i class='bx bx-file' style='color:#fff8f8'  ></i>
                                <h4>Policies</h4>
                        </div>
                        </a>
                        <a href="#">
                        <div class="complience-box">
                                <i class='bx bx-file' style='color:#fff8f8'  ></i>
                                <h4>Indicators Tracker</h4>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="legal-box">
                    <div class="top">
                        <ul>
                            <li><span></span><p>Background Checks</p></li>
                            <li><span></span><p>Vehivle Maintenance</p></li>
                            <li><span></span><p>Safety Measures</p></li>
                            <li><span></span><p>Insurance Coverage</p></li>
                            <li><span></span><p>App Functionality</p></li>
                        </ul>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>
                                <div class="legal-chart">
                                    <canvas id="legalchart"></canvas>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="legal-box">
                    <div class="top">
                        <p>Compliance  by Regulation</p>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>
                                <div class="chart">
                                    <canvas id="legalchart2" width="600" height="300"></canvas>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js"></script>
    <script src="./javascript/legal-chart.js"></script>
    <script src="./javascript/legal-chart2.js"></script>
</body>

</html>