<?php
    require "../../DB/Connection.php";
    require "../../Model/User.php";
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $conn = db_connection();
        $obj = new User($_POST, "ADMIN");
        $row = $obj->adminLogin($conn);
        if($row){
            echo '<script>alert("Logged in successfully");</script>';
            echo '<script>window.location.href = "../../Views/AdminDashboard/AdminDashboard.php";</script>';
            
        }else{
            echo '<script>alert("Incorrect Email or Password")</script>';
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
    <link rel="stylesheet" href="../../Views/CSS/login.css">
    <title>Admin Login</title>
</head>

<body>
    <div class="admin-login p-5 rounded text-white" style="width: 30%;">
        <h3 class="text-center mb-3">Admin Login</h3>
        <form action="" method="post" id="loginForm">
            <div class="row">
                <div class="mb-4">
                    <label>Email</label><span class="required-field">*</span>
                    <input type="email" name="email" class="form-control" required placeholder="">
                </div>
            </div>

            <div class="row">
                <div class=" mb-4">
                    <label>Password</label><span class="required-field">*</span>
                    <input type="password" name="password" class="form-control" required placeholder="">
                </div>
            </div>

            <div class="row">
                <div class="col-6 mb-4">
                    <label>Catpcha</label><span class="required-field">*</span>
                    <input type="text" id="inputCaptcha" name="inputCaptcha" required pattern="^[0-9A-Za-z]+$"
                        class="form-control">
                </div>
                <div class="col-3 mb-4">
                    <label>&nbsp;</label><br>
                    <input type="text" id="showCaptcha" name="showCaptcha" disabled class="form-control">
                </div>&nbsp;
                <div class="col-2 mb-4">
                    <label>&nbsp;</label><br>
                    <img src="../../Views/Images/refresh.svg" id="refreshCaptcha"
                        style="width: 35px; height: 35px; border-radius: 4px; cursor: pointer;" alt="regenerate">
                </div>
            </div><br>

            <div class="submit-cont">
                <button type="submit" class="admin-login-btn">Login</button>
            </div>
        </form>
    </div>

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