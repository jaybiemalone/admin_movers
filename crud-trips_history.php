<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movers.com</title>
    <link rel="icon" href="/Asset/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./style/index.css">
    <script type="text/javascript" src="app.js" defer></script>
    <script type="text/javascript" src="login.js" defer></script>
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
                </div>
            </li>
            <li class="active">
                <a href="dashbord.php">
                    <i class='bx bxs-dashboard' ></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="user.php">
                    <i class='bx bx-user' ></i>
                    <span>User</span>
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
                        <li><a href="upcomingtrips.php">Upcoming Trips</a></li>
                        <li><a href="triphistory.php">Tips history</a></li>
                        <li><a href="trips.php">Trips</a></li>
                    </div>
                </ul>
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
                <a href="security.php">
                    <i class='bx bx-shield' ></i>
                    <span>Security</span>
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
                <a href="user.php">
                    <i class='bx bx-user'></i>
                    <span>User</span>
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
                        <li class="active"><a href="triphistory.php">Tips history</a></li>
                        <li><a href="trips.php">Trips</a></li>
                    </div>
                </ul>
            </li>
            <li>
                <a href="communication.php">
                    <i class='bx bx-chat'></i>
                    <span>Communication</span>
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
                <a href="security.php">
                    <i class='bx bx-shield'></i>
                    <span>Security</span>
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
            <div class="leftbar">
                <button>
                    <i class='bx bx-home-alt-2'></i>
                </button>
                <a href="index.php">
                    <span>Home</span>
                </a>
                <i class='bx bx-chevron-right'></i>
                <span>Trips</span>
                <i class='bx bx-chevron-right'></i>
                <span>Trip History</span>
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
        <div class="triphistory-container">
            <div class="history-box">
                <div class="top-box">
                    <h3>Add Appointment</h3>
                    <a href="triphistory.php"><button>Back</button></a>
                </div>
                <div class="form-container">
                    <form class="create-form">
                        <ul>
                            <li><label for="">Driver</label>
                                <input id="driver" name="driver">
                            </li>
                            <li><label for="">Client</label>
                                <input id="client" name="client">
                            </li>
                            <li><label for="">Email</label>
                                <input id="email" type="text" name="email">
                            </li>
                        </ul>
                        <ul>
                            <li><label for="">Trip from</label>
                                <input id="from" type="text" name="from">
                            </li>
                            <li><label for="">Trip to</label>
                                <input id="to" type="text" name="to">
                            </li>
                            <li><label for="">Hours</label>
                                <input id="hours" type="text" name="hours">
                            </li>
                            <li><label for="">Amount</label>
                                <input id="amount" type="text" name="amount">
                            </li>
                            <li><label for="">Tips</label>
                                <input id="tip" type="text" name="tip">
                            </li>
                            <li><label for="">Actions</label>
                                <input id="status" type="text" name="status">
                            </li>
                        </ul>
                        <button type="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>

        <script>
        </script>
</body>

</html>