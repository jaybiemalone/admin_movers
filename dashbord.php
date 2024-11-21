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
            <li class="active">
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
            <li class="active">
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
                <span>Dashboard</span>
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
        <div class="dashboard-content">
            <div class="box">
                <div class="first-box">
                    <div class="box-icon">
                        <i class='bx bx-car' style='color:#0e68da'  ></i>
                    </div>
                </div>
                <div class="second-box">
                    <div class="text-box">
                        <h5><i class='bx bxs-up-arrow bx-burst' style='color:#00780C'  ></i> <span style="color: #00780C;">0%</span> from last week</h5>
                        <h1>0</h1>
                        <p>Trips</p>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="first-box">
                    <div class="box-icon">
                        <i class='bx bx-car' style='color:#0e68da'  ></i>
                    </div>
                </div>
                <div class="second-box">
                    <div class="text-box">
                        <h5><i class='bx bxs-up-arrow bx-burst' style='color:#00780C'  ></i> <span style="color: #00780C;">0%</span> from last week</h5>
                        <h1>0</h1>
                        <p>Passenger</p>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="first-box">
                    <div class="box-icon">
                        <i class='bx bxs-car' style='color:#0e68da' ></i>
                    </div>
                </div>
                <div class="second-box">
                    <div class="text-box">
                        <h5><i class='bx bxs-down-arrow bx-burst' style='color:#780000' ></i> <span style="color: #780000;">0%</span>from last week</h5>
                        <h1>₱0</h1>
                        <p>Earnings</p>
                    </div></div>
                </div>
            <div class="box">
                <div class="first-box">
                    <div class="trip">
                        <h3>Trips Overview</h3>
                    </div>
                </div>
                <div class="second-box">
                    <div class="left-box">
                        <p>This Month</p>
                        <b>₱0</b>
                        <span style="background-color: #00780C; border-radius: 5px; padding-bottom: 5px; margin-bottom: 7px;">+21.68%</span>
                        <div class="trips-container">
                            <ul>
                                <li>Booked <br><span>0</span></li>
                                <li>Trips <br><span>0%</span></li>
                            </ul>
                            <ul>
                                <li>Growth <br><span>0</span></li>
                                <li>Signups <br><span>0</span></li>
                            </ul>
                            <ul>
                                <li>Ratings <br><span>0</span></li>
                                <li>Earnings <br><span>0</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-box">
                        <div class="chart">
                            <canvas id="barchart" width="330" height="220"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="first-box">
                    <div class="Passenger">
                        <h3>Passenger</h3>
                    </div>
                </div>
                <div class="second-box">
                    <div class="circle">
                        <div class="large">
                            <img src="./Asset/largecircle.png" alt="" width="223px" height="200px">
                            <b>Total <br>0</b>
                        </div>
                        <div class="medium">
                            <img src="./Asset/mediumcircle.png" alt="" width="156px" height="144px" style="rotate: 20; margin-top: 10px; border-radius: 50%;">
                            <b>Total <br>0</b>
                        </div>
                        <div class="small">
                            <img src="./Asset/smallcircle.png" alt="" width="116px" height="100px" style="margin-top: 5px; border-radius: 50%;">
                            <b>Total <br>0</b>
                        </div>
                    </div>
                    <div class="second-circle">
                        <div class="large">
                            <img src="./Asset/largecircle.png" alt="" width="223px" height="200px">
                        </div>
                        <div class="medium">
                            <img src="./Asset/mediumcircle.png" alt="" width="156px" height="144px" style="rotate: 20; margin-top: 10px; border-radius: 50%;">
                        </div>
                        <div class="small">
                            <img src="./Asset/smallcircle.png" alt="" width="116px" height="100px" style="margin-top: 5px; border-radius: 50%;">
                        </div>
                    </div>
                    <div class="circle-percent" style="text-align: center;">
                        <h3>0%<br><p style="font-weight: normal; font-size: 12px;">Male</p></h3>
                        <h3>0%<br><p style="font-weight: normal; font-size: 12px;">Female</p></h3>
                        <h3>0%<br><p style="font-weight: normal; font-size: 12px;">Other</p></h3>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="first-box">
                    <ul>
                        <li><h1>Pipe Line</h1></li>
                    </ul>
                    <ul>
                        <li><button>Month</button></li>
                        <li><button>Year</button></li>
                    </ul>
                </div>
                <div class="second-box">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js"></script>
    <script src="./javascript/chart1.js"></script>
</body>
</html>