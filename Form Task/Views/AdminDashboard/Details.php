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
    <link rel="stylesheet" href="../../Views/CSS/style.css">
    <link rel="stylesheet" href="../../Views/CSS/header.css">
    <link rel="stylesheet" href="../../Views/CSS/footer.css">
    <title>Details</title>
</head>

<body>
    <?php 
        include "../../Views/Common Pages/Header.php";
    ?>
    <div class="main p-5">
        <div class="form m-auto" style="width: 80%;">
            <?php
            require "../../DB/Connection.php";
            require "../../Model/Player.php";

            $conn = db_connection();
            $id = $_GET["id"];
            
            $row = Player::getPlayerById($conn, $id);
            ?>
            <div class="form-content">
                <div>
                    <h2 class="form-data-title">Player Details</h2>
                    <hr>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>First Name</label>
                            <label for="" class="form-control"
                                style="height: 38px;"><?php echo $row["FIRST_NAME"] ?></label>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>Father/Husband Name</label>
                            <label for="" class="form-control"
                                style="height: 38px;"><?php echo $row["MIDDLE_NAME"] ?></label>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>Last Name</label>
                            <label for="" class="form-control" style="height: 38px;">
                                <?php echo $row["LAST_NAME"] ?></label>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>Age Group</label>
                            <label for="" class="form-control" style="height: 38px;">
                                <?php echo $row["AGE_GROUP"] ?></label>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>Gender</label><br>
                            <input class="form-check-input" <?php echo $row["GENDER"] == 'Male' ? 'checked' : '' ?>
                                value="M" type="radio" name="gender" disabled>&nbsp;
                            <span>Male</span>&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" value="F"
                                <?php echo $row["GENDER"] == 'Female' ? 'checked' : '' ?> name="gender" disabled>&nbsp;
                            <span>Female</span>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>Date of Birth(DD-MM-YYYY)</label>
                            <label for="" class="form-control" style="height: 38px;"><?php echo $row["DOB"] ?></label>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>Sports Name</label>
                            <label for="" class="form-control"
                                style="height: 38px;"><?php echo $row["SPORTS_NAME"] ?></label>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>Sub Sports Name</label>
                            <label for="" class="form-control"
                                style="height: 38px;"><?php echo $row["SUB_SPORTS_NAME"] ?></label>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>Mobile Number</label>
                            <label for="" class="form-control" style="height: 38px;">
                                <?php echo $row["MOBILE_NUMBER"] ?></label>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>Email</label>
                            <label for="" class="form-control" style="height: 38px;">
                                <?php echo $row["EMAIL"] ?></label>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>Weight (kg)</label>
                            <label for="" class="form-control" style="height: 38px;">
                                <?php echo $row["WEIGHT"] ?></label>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>Height</label>
                            <label for="" class="form-control"
                                style="height: 38px;"><?php echo $row["HEIGHT"] ?></label>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>District</label>
                            <label for="" class="form-control"
                                style="height: 38px;"><?php echo $row["DISTRICT"] ?></label>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>Taluka/Zone</label>
                            <label for="" class="form-control"
                                style="height: 38px;"><?php echo $row["TALUKA"] ?></label>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>Village/Ward</label>
                            <label for="" class="form-control"
                                style="height: 38px;"><?php echo $row["VILLAGE"] ?></label>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>Caste</label>
                            <label for="" class="form-control" style="height: 38px;"><?php echo $row["CASTE"] ?></label>
                        </div>
                    </div>
                </div>

                <div>
                    <h2 class="form-data-title">Guaridans Details</h2>
                    <hr>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>First Name</label>
                            <label for="" class="form-control"
                                style="height: 38px;"><?php echo $row["GUARDIAN_FIRST_NAME"] ?></label>
                        </div>


                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>Last Name</label>
                            <label for="" class="form-control"
                                style="height: 38px;"><?php echo $row["GUARDIAN_LAST_NAME"] ?></label>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>Mobile Number</label>
                            <label for="" class="form-control"
                                style="height: 38px;"><?php echo $row["COACH_MOBILE_NUMBER"] == 0 ? '' : $row["COACH_MOBILE_NUMBER"] ?></label>
                        </div>
                    </div>
                </div>

                <div>
                    <h2 class="form-data-title">Other Details</h2>
                    <hr>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>Coach Name</label>
                            <label for="" class="form-control"
                                style="height: 38px;"><?php echo $row["COACH_NAME"] ?></label>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>Coach mobile number</label>
                            <label for="" class="form-control"
                                style="height: 38px;"><?php echo $row["COACH_MOBILE_NUMBER"] == 0 ? '' : $row["COACH_MOBILE_NUMBER"] ?></label>
                        </div>

                        <div class="col-lg-3 col-md-4 mb-4">
                            <label>Coach home address</label>
                            <label for="" class="form-control"
                                style="height: 38px;"><?php echo $row["COACH_ADDRESS"] ?></label>
                        </div>
                    </div>
                </div>

                <div class="submit-cont">
                    <a href="../../Views/AdminDashboard/DisplayData.php">
                        <button class="form-btn">Back</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php 
        include "../../Views/Common Pages/Footer.php";
    ?>
</body>

</html>