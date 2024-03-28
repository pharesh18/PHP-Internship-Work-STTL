<?php 
    session_start();
    if (isset($_SESSION['playerData'])) {
        unset($_SESSION['playerData']);
    }

    header("location: ../../Views/Common Pages/Index.php");
?>