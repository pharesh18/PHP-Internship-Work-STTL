<?php 
    session_start();
    $playerData = null;
    if(isset($_SESSION['userData'])){
        $userData = $_SESSION['userData'];
    }
    if(isset($_SESSION['playerData'])){
        $playerData = $_SESSION['playerData'];
    }
?>

<div class="headerRow py-3">
    <div class="m-auto" style="width: 80%;">
        <?php if(isset($userData["IS_ADMIN"]) && $userData["IS_ADMIN"] == 1){ ?>
        <div class="d-md-flex align-items-center justify-content-between">
            <div id="navbar-brand">
                <a href="../../Views/AdminDashboard/AdminDashboard.php"
                    title="Khel Mahakumbh | Sports Authority of Gujarat | Government of Gujarat">
                    <img src="../../Views/Images/header.png" width="394" height="84"
                        alt="Khel Mahakumbh | Sports Authority of Gujarat | Government of Gujarat">
                </a>
            </div>
            <div class="d-flex headerRight">
                <div id="navbarNav">
                    <div class="navbar-toggler"><a href="#" class="toggleMenu"><span class="iconBar"></span><span
                                class="iconBar"></span><span class="iconBar"></span></a></div>
                    <ul id="navbar-nav">
                        <li class="nav-item"><a class="nav-link"
                                href="../../Views/AdminDashboard/AdminDashboard.php">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="../../Views/AdminDashboard/DisplayData.php">Players List</a></li>
                        <li class="nav-item"><a class="nav-link" href="../../Views/AdminDashboard/Logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php } else { ?>

        <?php if($playerData != null){ ?>
        <div class="d-md-flex align-items-center justify-content-between">
            <div id="navbar-brand">
                <a href="../../Views/UserDashboard/Dashboard.php"
                    title="Khel Mahakumbh | Sports Authority of Gujarat | Government of Gujarat">
                    <img src="../../Views/Images/header.png" width="394" height="84"
                        alt="Khel Mahakumbh | Sports Authority of Gujarat | Government of Gujarat">
                </a>
            </div>
            <div class="d-flex headerRight">
                <div id="navbarNav">
                    <div class="navbar-toggler"><a href="#" class="toggleMenu"><span class="iconBar"></span><span
                                class="iconBar"></span><span class="iconBar"></span></a></div>
                    <ul id="navbar-nav">
                        <li class="nav-item"><a class="nav-link"
                                href="../../Views/UserDashboard/Dashboard.php">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="../../Views/UserDashboard/Logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php } else { ?>
        <div class="d-md-flex align-items-center justify-content-between">
            <div id="navbar-brand">
                <a href="../../Views/Common Pages/Index.php"
                    title="Khel Mahakumbh | Sports Authority of Gujarat | Government of Gujarat">
                    <img src="../../Views/Images/header.png" width="394" height="84"
                        alt="Khel Mahakumbh | Sports Authority of Gujarat | Government of Gujarat">
                </a>
            </div>
            <div class="d-flex headerRight">
                <div id="navbarNav">
                    <div class="navbar-toggler"><a href="#" class="toggleMenu"><span class="iconBar"></span><span
                                class="iconBar"></span><span class="iconBar"></span></a></div>
                    <ul id="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="../../Views/Common Pages/Index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../../Views/Auth/Login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="../../Views/Auth/Registration.php">Registration</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php } } ?>
    </div>
</div>