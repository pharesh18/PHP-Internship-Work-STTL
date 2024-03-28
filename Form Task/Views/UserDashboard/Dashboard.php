<?php
// session_start();
if(isset($_SESSION['playerData'])){ 
    $playerData = $_SESSION['playerData'];
}
?>

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
    <link rel="stylesheet" href="../../Views/CSS/dashboard.css">
    <link rel="stylesheet" href="../../Views/CSS/header.css">
    <link rel="stylesheet" href="../../Views/CSS/footer.css">
    <title pb-2>Dashboard</title pb-2>
</head>

<body>
    <?php 
        include "../../Views/Common Pages/Header.php";
    ?>
    <div class="dashboard py-5">
        <div class="main m-auto">
            <div class="user-details d-flex justify-content-between p-3 mb-4">
                <div class="" style="width: 35%;">
                    <h2><?php echo isset($playerData["FIRST_NAME"]) ? $playerData["FIRST_NAME"] : "" ?> &nbsp;
                        <?php echo isset($playerData["LAST_NAME"]) ? $playerData["LAST_NAME"] : "" ?></h2>
                    <p><?php echo isset($playerData["SPORTS_NAME"]) ? $playerData["SPORTS_NAME"] : "" ?> - (Individual)
                    </p>
                </div>
                <div class="" style="width: 20%;">
                    <div class="details">
                        <h5>KMKID</h5>
                        <p><?php echo isset($playerData["KMKID"]) ? $playerData["KMKID"] : "" ?></p>
                    </div>
                    <div class="details">
                        <h5>Email</h5>
                        <p><?php echo isset($playerData["EMAIL"]) ? $playerData["EMAIL"] : "" ?></p>
                    </div>
                    <div class="details">
                        <h5>Player</h5>
                        <p>Individual Player</p>
                    </div>
                </div>
                <div class="" style="width: 20%;">
                    <div class="details">
                        <h5>KhelMahaKumbh ID</h5>
                        <p>123AKEKD34DK</p>
                    </div>
                    <div class="details">
                        <h5>Mobile Number</h5>
                        <p><?php echo isset($playerData["MOBILE_NUMBER"]) ? $playerData["MOBILE_NUMBER"] : "" ?></p>
                    </div>
                    <div class="details">
                        <h5>Registered School Name</h5>
                        <p>K S School of Business Management</p>
                    </div>
                </div>
                <div class="" style="width: 20%;">
                    <div class="details">
                        <h5>Team Id</h5>
                        <p>-</p>
                    </div>
                    <div class="details">
                        <h5>Date of Birth</h5>
                        <p><?php echo isset($playerData["DOB"]) ? date('d-m-Y', strtotime($playerData["DOB"])) : "" ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="certificates d-flex align-center justify-content-between mb-4">
                <div class="p-3 me-2 bg-white certificates-left rounded border-secondary" style="width: 62%;">
                    <h5 class="title pb-2 mb-3">Certificates</h5>
                    <a class="rounded download p-2 color-white" href="../../Views/UserDashboard/generatePDF.php"
                        style="text-decoration: none;">
                        <!-- <div class="rounded download p-2 color-white"> -->
                        <div class="print rounded me-2">
                            <i class="bi bi-printer color-white"></i>
                        </div>
                        <span>Download Form</span>
                        <!-- </div> -->
                    </a>
                </div>
                <div class="p-3 bg-white certificates-right rounded" style="width: 35%;">
                    <h5 class="title pb-2 mb-3">Upcoming Events</h5>
                </div>
            </div>

            <div class="kmk-details bg-white rounded p-3">
                <h5 class="title pb-2">11th KhelMahaKumbh Details</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam obcaecati velit consequatur sequi
                    voluptas, possimus error impedit vero tenetur explicabo excepturi in sapiente voluptatibus minima,
                    iusto dolor dicta ad perferendis tempora? Totam officia cupiditate ducimus harum sit incidunt velit
                    voluptas ullam suscipit non omnis quibusdam ad repellat nulla eaque debitis, voluptatum amet
                    corporis et voluptatem possimus, autem quod aut. Quasi, facilis rerum officia, vel modi odio
                    laboriosam quam ex soluta tempora ducimus velit quod. Ea enim ipsa vel. Adipisci, dolore, doloribus
                    omnis pariatur debitis consectetur perspiciatis ex reiciendis tempore error voluptates aperiam odio
                    facilis delectus numquam. Tenetur beatae architecto voluptatem!</p>
            </div>
        </div>
    </div>
    <?php 
        include "../../Views/Common Pages/Footer.php";
    ?>
</body>

</html>