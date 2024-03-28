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
    <link rel="stylesheet" href="../../Views/CSS/header.css">
    <link rel="stylesheet" href="../../Views/CSS/footer.css">
    <link rel="stylesheet" href="../../Views/CSS/style.css">
    <title>Registration</title>
</head>

<body>
    <?php 
        include "../../Views/Common Pages/Header.php";
    ?>
    <div class="main p-5">
        <?php
            require "../../DB/Connection.php";
            require "../../Model/Player.php";
            
            $conn = db_connection();
            $id = $_GET["id"];
      
            $row = Player::getPlayerById($conn, $id);
            ?>
        <div class="form m-auto" style="width: 80%;">
            <form method="post" action="Update.php?id=<?php echo $row["ID"] ?>">
                <div class="form-content">
                    <div>
                        <h2 class="form-data-title">Player Details</h2>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>First Name</label><span class="required-field">*</span>
                                <input type="text" name="firstName" value="<?php echo $row["FIRST_NAME"] ?>"
                                    class="form-control" placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Father/Husband Name</label><span class="required-field">*</span>
                                <input type="text" name="middleName" value="<?php echo $row["MIDDLE_NAME"] ?>"
                                    class="form-control" placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Last Name</label><span class="required-field">*</span>
                                <input type="text" name="lastName" value="<?php echo $row["LAST_NAME"] ?>"
                                    class="form-control" placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Age Group</label><span class="required-field">*</span>
                                <select class="form-select" name="ageGroup">
                                    <?php
                                    $ageGroup = array(
                                    '9-11' => '9-11',
                                    '11-14' => '11-14',
                                    '14-17' => '14-17',
                                    'Above 17' => 'Above 17'
                                    );

                                    foreach ($ageGroup as $value => $label) {
                                        $selected = ($row['AGE_GROUP'] == $value) ? 'selected' : '';
                                        echo "<option value='$value' $selected>$label</option>";
                                    }
                                ?>
                                </select>
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Select Gender</label><span class="required-field">*</span><br>
                                <input class="form-check-input" <?php echo $row["GENDER"] == 'Male' ? 'checked' : '' ?>
                                    value="M" type="radio" name="gender">&nbsp;
                                <span>Male</span>&nbsp;&nbsp;
                                <input class="form-check-input" type="radio" value="F"
                                    <?php echo $row["GENDER"] == 'Female' ? 'checked' : '' ?> name="gender">&nbsp;
                                <span>Female</span>
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Date of Birth(DD-MM-YYYY)</label><span class="required-field">*</span>
                                <input type="date" name="dob" value="<?php echo $row["DOB"] ?>" class="form-control"
                                    placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Sports Name</label><span class="required-field">*</span>
                                <select class="form-select" name="sportsName">
                                    <?php
                                    $ageGroup = array(
                                    'Cricket' => 'Cricket',
                                    'Kabaddi' => 'Kabaddi',
                                    'Kho-Kho' => 'Kho-Kho',
                                    'Football' => 'Football'
                                    );

                                    foreach ($ageGroup as $value => $label) {
                                        $selected = ($row['SPORTS_NAME'] == $value) ? 'selected' : '';
                                        echo "<option value='$value' $selected>$label</option>";
                                    }
                                ?>
                                </select>
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Sub Sports Name</label><span class="required-field">*</span>
                                <input type="text" name="subSportsName" value="<?php echo $row["SUB_SPORTS_NAME"] ?>"
                                    class="form-control" placeholder="">
                            </div>
                            <!-- 
                        <div class="col-lg-3 col-md-4 mb-4">
                            <label class="form-check-label" for="selectGame">
                                Tick the check box to select another game
                            </label><br>
                            <input class="form-check-input" type="checkbox" value="" id="selectGame">
                        </div> -->

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Mobile Number</label><span class="required-field">*</span>
                                <input type="number" name="mobileNumber" value="<?php echo $row["MOBILE_NUMBER"] ?>"
                                    class="form-control" placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Email</label><span class="required-field">*</span>
                                <input type="email" class="form-control" name="email"
                                    value="<?php echo $row["EMAIL"] ?>" placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Weight (kg)</label>
                                <input type="number" name="weight" value="<?php echo $row["WEIGHT"] ?>"
                                    class="form-control" placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Height</label>
                                <input type="text" name="height" value="<?php echo $row["HEIGHT"] ?>"
                                    class="form-control" placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>District</label>
                                <input type="text" name="district" value="<?php echo $row["DISTRICT"] ?>"
                                    class="form-control" placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Taluka/Zone</label>
                                <input type="text" name="taluka" value="<?php echo $row["TALUKA"] ?>"
                                    class="form-control" placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Village/Ward</label>
                                <input type="text" name="village" value="<?php echo $row["VILLAGE"] ?>"
                                    class="form-control" placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Caste</label><span class="required-field">*</span>
                                <select class="form-select" name="caste">
                                    <?php
                                    $ageGroup = array(
                                    'SEBC' => 'SEBC',
                                    'SC' => 'SC',
                                    'ST' => 'ST',
                                    'OPEN' => 'OPEN'
                                    );

                                    foreach ($ageGroup as $value => $label) {
                                        $selected = ($row['CASTE'] == $value) ? 'selected' : '';
                                        echo "<option value='$value' $selected>$label</option>";
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="form-data-title">Guaridans Details</h2>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>First Name</label>
                                <input type="text" name="guardianFirstName"
                                    value="<?php echo $row["GUARDIAN_FIRST_NAME"] ?>" class="form-control"
                                    placeholder="">
                            </div>


                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Last Name</label>
                                <input type="text" name="guardianLastName"
                                    value="<?php echo $row["GUARDIAN_LAST_NAME"] ?>" class="form-control"
                                    placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Mobile</label>
                                <input type="number" name="guardianMobileNumber"
                                    value="<?php echo $row["GUARDIAN_MOBILE_NUMBER"] == 0 ? '' : $row["GUARDIAN_MOBILE_NUMBER"]; ?>"
                                    class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="form-data-title">Other Details</h2>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Coach Name</label>
                                <input type="text" name="coachName" value="<?php echo $row["COACH_NAME"] ?>"
                                    class="form-control" placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Coach mobile number</label>
                                <input type="number" name="coachMobileNumber"
                                    value="<?php echo $row["COACH_MOBILE_NUMBER"] == 0 ? '' : $row["COACH_MOBILE_NUMBER"] ?>"
                                    class="form-control" placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Coach home address</label>
                                <textarea class="form-control" name="coachAddress"
                                    rows="1"><?php echo $row["COACH_ADDRESS"] ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="submit-cont">
                        <button type="submit" class="form-btn">Save</button>
                        <button class="form-btn"><a href="../../Views/AdminDashboard/DisplayData.php"
                                style="text-decoration: none; color: #fff;">Back</a></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php 
        include "../../Views/Common Pages/Footer.php";
    ?>
</body>

</html>