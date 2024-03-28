<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- ---- data table libraries -->

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js">
    </script>



    <link rel="stylesheet" href="../../Views/CSS/style.css">
    <link rel="stylesheet" href="../../Views/CSS/header.css">
    <link rel="stylesheet" href="../../Views/CSS/footer.css">
    <title>Home</title>
</head>

<body>
    <?php 
        include "../../Views/Common Pages/Header.php";
    ?>
    <div class="py-5 m-auto" style="width: 80%; min-height: 700px;">
        <h2 class="text-center mb-4">Players List</h2>
        <table id="myTable" class="table table-striped border">
            <thead>
                <tr>
                    <th scope="col" class="py-3">Player ID</th>
                    <th scope="col" class="py-3">FirstName</th>
                    <th scope="col" class="py-3">LastName</th>
                    <th scope="col" class="py-3">Gender</th>
                    <th scope="col" class="py-3">Date of Birth</th>
                    <th scope="col" class="py-3">Sports Name</th>
                    <th scope="col" class="py-3">Email</th>
                    <th scope="col" class="py-3">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require "../../DB/Connection.php";
                require "../../Model/Player.php";
                $conn = db_connection();
                $result = Player::getAllPlayerData($conn);
                if($result){
                    while( $row = mysqli_fetch_assoc($result)){
                    echo 
                    '<tr scope="row">
                        <td class="py-3">' . $row["ID"] .'</td>
                        <td class="py-3">' . $row["FIRST_NAME"] .'</td>
                        <td class="py-3">' . $row["LAST_NAME"] .'</td>
                        <td class="py-3">' . $row["GENDER"] .'</td>
                        <td class="py-3">' . $row["DOB"] .'</td>
                        <td class="py-3">' . $row["SPORTS_NAME"] .'</td>
                        <td class="py-3">' . $row["EMAIL"] .'</td>
                        <td class="py-3">
                            <button class="form-btn">
                                <a href="Edit.php?id='. $row["ID"] .'" class="me-1" style="text-decoration: none; color: #fff;">Edit</a>
                            </button>
                            <button class="form-btn">
                                <a href="Details.php?id='. $row["ID"] .'" class="me-1" style="text-decoration: none; color: #fff;">Details</a>
                            </button>

                            <button class="form-btn">
                                <a href="Delete.php?id='. $row["ID"] .'" onclick="return confirm(\'Are you sure you want to delete this player?\')" class="me-1" style="text-decoration: none; color: #fff;">Delete</a>
                            </button>
                        </td>
                    </tr>';
                    }
                }    
        ?>
            </tbody>
        </table>
    </div>
    <?php 
        include "../../Views/Common Pages/Footer.php";
    ?>
</body>

<script>
$(document).ready(function() {
    $('#myTable').DataTable();
});
</script>


</html>