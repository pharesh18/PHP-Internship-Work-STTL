<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        require "../../DB/Connection.php";
        require "../../Model/Player.php";
        $conn = db_connection();
        $obj = new Player($_POST);
        $kmkid = $obj->Create_Player($conn);
        if($kmkid){
            echo '<script>alert("Your KMKID is ' . $kmkid . '  Use this ID to Login")</script>';
            echo '<script>window.location.href = "../../Views/Auth/Login.php";</script>';
        }else{
            echo '<script>alert("Error while registering the user")</script>';
        } 
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
    <link rel="stylesheet" href="../../Views/CSS/footer.css">
    <link rel="stylesheet" href="../../Views/CSS/header.css">
    <link rel="stylesheet" href="../../Views/CSS/style.css">
    <title>Registration</title>
</head>

<body>
    <?php 
        include "../../Views/Common Pages/Header.php";
    ?>
    <div class="main p-5">
        <div class="form m-auto" style="width: 80%;">
            <div class="form-instructions">
                <div class="form-rules">
                    <h4>Instructions For Registration</h4>
                    <p>1. For Under-9, Under-11, Under-14, Under-17 competitions, Registration through School is
                        mandatory</p>
                    <p>2. Open Age Group (Born 31/12/2006 And Before)</p>
                    <p>3. While registering to participate in the second game, registration must be done with the
                        frist
                        registration ID (first game of KMK id), otherwise the registration of the second game will
                        not
                        be considered valid.</p>
                </div>
                <div class="form-note">
                    <div>Note: &nbsp; <span class="required-field">*</span> <i>fields are compulsory</i>
                        <span></span>
                    </div>
                </div>
            </div>
            <form method="post" action="" id="registerForm">
                <div class="form-content">
                    <div>
                        <h2 class="form-data-title">Fetch Data From KMK ID</h2>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>KhelMahaKumbh</label>
                                <select class="form-select">
                                    <option selected value="11">11th KhelMahaKumbh</option>
                                    <option value="10">10th KhelMahaKumbh</option>
                                    <option value="9">9th KhelMahaKumbh</option>
                                    <option value="8">8th KhelMahaKumbh</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-4">
                                <label for="KMKID">KMK ID</label>
                                <input type="text" id="KMKID" class="form-control" placeholder="KMK00000000">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label for=""></label><br>
                                <input class="form-btn" type="button" value="Search">
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="form-data-title">Player Details</h2>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>First Name</label><span class="required-field">*</span>
                                <input type="text" name="firstName" class="form-control" required placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Father/Husband Name</label><span class="required-field">*</span>
                                <input type="text" name="middleName" class="form-control" required placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Last Name</label><span class="required-field">*</span>
                                <input type="text" name="lastName" class="form-control" required placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Age Group</label><span class="required-field" required>*</span>
                                <select class="form-select" name="ageGroup">
                                    <option selected disabled value="">Select</option>
                                    <option value="9-11">9-11</option>
                                    <option value="11-14">11-14</option>
                                    <option value="14-17">14-17</option>
                                    <option value="Above 17">Above 17</option>
                                </select>
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Select Gender</label><span class="required-field">*</span><br>
                                <input class="form-check-input" value="M" type="radio" name="gender">&nbsp;
                                <span>Male</span>&nbsp;&nbsp;
                                <input class="form-check-input" type="radio" value="F" name="gender">&nbsp;
                                <span>Female</span>
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Date of Birth(DD-MM-YYYY)</label><span class="required-field">*</span>
                                <input type="date" name="dob" class="form-control" required placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Sports Name</label><span class="required-field">*</span>
                                <select class="form-select" required name="sportsName">
                                    <option selected disabled value="">Select</option>
                                    <option value="Cricket">Cricket</option>
                                    <option value="Kabaddi">Kabaddi</option>
                                    <option value="Kho-Kho">Kho-Kho</option>
                                    <option value="Football">Football</option>
                                </select>
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Sub Sports Name</label><span class="required-field">*</span>
                                <input type="text" name="subSportsName" class="form-control" required placeholder="">
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
                                <input type="number" name="mobileNumber" class="form-control" required placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Email</label><span class="required-field">*</span>
                                <input type="email" name="email" class="form-control" required placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Password</label><span class="required-field">*</span>
                                <input type="text" name="password" class="form-control" required placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Weight (kg)</label>
                                <input type="number" name="weight" class="form-control" placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Height</label>
                                <input type="text" name="height" class="form-control" placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>District</label>
                                <input type="text" name="district" class="form-control" placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Taluka/Zone</label>
                                <input type="text" name="taluka" class="form-control" placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Village/Ward</label>
                                <input type="text" name="village" class="form-control" placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Caste</label><span class="required-field">*</span>
                                <select class="form-select" required name="caste">
                                    <option selected disabled value="">Select</option>
                                    <option value="SEBC">SEBC</option>
                                    <option value="SC">SC</option>
                                    <option value="ST">ST</option>
                                    <option value="OPEN">OPEN</option>
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
                                <input type="text" name="guardianFirstName" class="form-control" placeholder="">
                            </div>


                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Last Name</label>
                                <input type="text" name="guardianLastName" class="form-control" placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Mobile</label>
                                <input type="number" name="guardianMobileNumber" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="form-data-title">Other Details</h2>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Coach Name</label>
                                <input type="text" name="coachName" class="form-control" placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Coach mobile number</label>
                                <input type="number" name="coachMobileNumber" class="form-control" placeholder="">
                            </div>

                            <div class="col-lg-3 col-md-4 mb-4">
                                <label>Coach home address</label>
                                <textarea class="form-control" name="coachAddress" rows="1"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-sm-6 col-12 mb-4">
                            <label>Captcha</label><span class="required-field">*</span>
                            <input type="text" id="inputCaptcha" name="inputCaptcha" required pattern="^[0-9A-Za-z]+$"
                                class="form-control">
                        </div>
                        <div class="col-lg-2 col-sm-3 col-8  mb-4">
                            <label>&nbsp;</label><br>
                            <input type="text" id="showCaptcha" name="showCaptcha" disabled class="form-control">
                        </div>&nbsp;
                        <div class="col-lg-2 col-sm-2 mb-4 col-3">
                            <label>&nbsp;</label><br>
                            <img src="../../Views/Images/refresh.svg" id="refreshCaptcha"
                                style="width: 35px; height: 35px; border-radius: 4px; cursor: pointer;"
                                alt="regenerate">
                        </div>

                    </div>
                    <br><br>
                    <div class="notes">
                        <p>Note- You will receive the login ID and passwor information of the player in the above
                            e-mail.
                        </p><br><br>
                        <p>1. If any kind of physical injury happens dring the competition, it will be the
                            responsibilty
                            of
                            me and my guardian. The organizer will have no responsibilty.</p>
                        <p>2. I will register from one place from the entire state, otherwise my registration will
                            be
                            canceled.</p>
                        <p>3. Therefore, I ____________________________ guarantee that if I am seelcted as the
                            winner in
                            Khelmahakumbh, I will be present at the competition venue at my own expense and risk
                            before
                            the
                            time indicate.</p>
                        <p>4. Mark the event on the back page for ach individual sub-event game.</p>
                        <p>Form-A for individual sport and Form-A and Form-B for joint sport are mandatory to be
                            filled.
                        </p>
                        <p>6. Form-B must be filled for Table Tennis, Lawn Tennis, Badminton Doubles and Mixed
                            Doubles.
                        </p>
                    </div><br>


                    <div class="agree">
                        <input type="checkbox" required value="">
                        <label for="">I accept</label>
                    </div><br><br>
                    <hr>

                    <div class="submit-cont">
                        <button type="submit" class="form-btn">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php 
        include "../../Views/Common Pages/Footer.php";
    ?>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var inputCaptcha = document.getElementById('inputCaptcha');
        var showCaptcha = document.getElementById('showCaptcha');
        var refreshCaptcha = document.getElementById('refreshCaptcha');
        showCaptcha.value = generateCaptcha();
        refreshCaptcha.addEventListener('click', function() {
            var captcha = generateCaptcha();
            showCaptcha.value = captcha;
        });

        function generateCaptcha() {
            var characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            var shuffledCharacters = characters.split('').sort(function() {
                return 0.5 - Math.random()
            }).join('');
            var captcha = shuffledCharacters.substr(0, 6);
            return captcha;
        }

        document.getElementById('registerForm').addEventListener('submit', function(e) {
            var inputCaptchaValue = inputCaptcha.value;
            var showCaptchaValue = showCaptcha.value;
            if (inputCaptchaValue !== showCaptchaValue) {
                e.preventDefault();
                alert('Captcha does not match. Please try again.');
                // window.location.href = "../../Views/Auth/Login.php";  // If you want to refresh the page if captcha is incorrect then uncomment this line
            }
        });
    });
    </script>
</body>

</html>