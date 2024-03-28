<?php
    require "../../DB/Connection.php";
    require "../../Model/User.php";
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $conn = db_connection();
        $obj = new User($_POST, "USER");
        $row = $obj->login($conn);
        if($row){
            echo '<script>alert("Logged in successfully");</script>';
            echo '<script>window.location.href = "../../Views/UserDashboard/Dashboard.php";</script>';
            
        }else{
            echo '<script>alert("Wrong KMKID or Password")</script>';
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
    <link rel="stylesheet" href="../../Views/CSS/login.css">
    <title>Login</title>
</head>

<body>
    <?php include "../../Views/Common Pages/Header.php"; ?>
    <div class="">
        <div class="login container">
            <div class="login-left">
                <form action="" method="post" id="loginForm">
                    <div class="row">
                        <div class="mb-5">
                            <label>કેએમકે આઈડી</label><span class="required-field">*</span>
                            <input type="text" name="KMKID" class="form-control" required placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class=" mb-5">
                            <label>પાસવર્ડ</label><span class="required-field">*</span>
                            <input type="password" name="password" class="form-control" required placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 mb-4">
                            <label>કેપ્ચા</label><span class="required-field">*</span>
                            <input type="text" id="inputCaptcha" name="inputCaptcha" required pattern="^[0-9A-Za-z]+$"
                                class="form-control">
                        </div>
                        <div class="col-3 mb-4">
                            <label>&nbsp;</label><br>
                            <input type="text" id="showCaptcha" name="showCaptcha" disabled class="form-control">
                        </div>
                        <div class="col-2 mb-4">
                            <label>&nbsp;</label><br>
                            <img src="../../Views/Images/refresh.svg" id="refreshCaptcha"
                                style="width: 35px; height: 35px; border-radius: 4px; cursor: pointer;"
                                alt="regenerate">
                        </div>
                    </div><br><br>

                    <div class="submit-cont">
                        <button type="submit" class="form-btn">લૉગિન</button>
                        <a href="ForgetPassword.php">પાસવર્ડ ભૂલી ગયા છો?</a>
                    </div>

                </form>
            </div>
            <div class="login-right">
                <div class="login-right-bg">
                    <div class="text-content">
                        <h1>લૉગિન</h1>
                        <p>તમારી અંગત વિગતો દાખલ કરો અને અમારી સાથે પ્રવાસ શરૂ કરો</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "../../Views/Common Pages/Footer.php"; ?>

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

        document.getElementById('loginForm').addEventListener('submit', function(e) {
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