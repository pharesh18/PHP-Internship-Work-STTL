  <?php
    // require "../../DB/Connection.php";
    // require "../../Model/User.php";
    
    // if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        // $conn = db_connection();
        // $obj = new User($_POST, "REGISTER");
        // $kmkid = $obj->registerUser($conn);
//         if($kmkid){
//             echo '<script>alert("Your KMKID is ' . $kmkid . '  Use this ID to Login")</script>';
//             echo '<script>window.location.href = "Login.php";</script>';
//         }else{
//             echo '<script>alert("Error while registering the user")</script>';
//         }
//     }
// ?>
  <!--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../CSS/login.css">
    <title>Registration</title>
</head>

<body>
    <div class="header-top">
        <h1>Header Top</h1>
    </div>
    <div class="header-bottom">
        <h1>Header Bottom</h1>
    </div>
    <div class="main">
        <div class="login registration container">
            <div class="login-left">
                <form action="" method="post">
                    <div class="row mb-3">
                        <div class="col-6">
                            <label>First Name</label><span class="required-field">*</span>
                            <input type="text" name="firstName" class="form-control" required placeholder="">
                        </div>
                        <div class="col-6">
                            <label>Last Name</label><span class="required-field">*</span>
                            <input type="text" name="lastName" class="form-control" required placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3">
                            <label>Email</label><span class="required-field">*</span>
                            <input type="email" name="email" class="form-control" required placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3">
                            <label>Mobile Number</label><span class="required-field">*</span>
                            <input type="number" name="mobileNumber" class="form-control" required placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3">
                            <label>Password</label><span class="required-field">*</span>
                            <input type="password" name="password" class="form-control" required placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class=" mb-3">
                            <label>Confirm Password</label><span class="required-field">*</span>
                            <input type="password" name="password" class="form-control" required placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label>Captcha</label><span class="required-field">*</span>
                            <input type="number" id="captcha" min="100000" name="captcha" required pattern="^[0-9]+$"
                                class="form-control">
                        </div>
                        <div class="col-3">
                            <label></label><br>
                            <img src="../captcha.jpg" style="width: 100%; height: 35px; border-radius: 4px;"
                                alt="captcha image">
                        </div>&nbsp;
                        <div class="col-2">
                            <label></label><br>
                            <img src="../refresh.svg"
                                style="width: 35px; height: 35px; border-radius: 4px; cursor: pointer;"
                                alt="regenerate">
                        </div>
                    </div><br><br>

                    <div class="submit-cont">
                        <button type="submit" class="form-btn">Register</button>
                        <a href="Login.php">Already Registered? Login here</a>
                    </div>

                </form>
            </div>
            <div class="login-right">
                <div class="login-right-bg">
                    <div class="text-content">
                        <h1>Register</h1>
                        <p>તમારી અંગત વિગતો દાખલ કરો અને અમારી સાથે પ્રવાસ શરૂ કરો</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top">
        <h1>Footer Top</h1>

    </div>
    <div class="footer-bottom">
        <h1>Footer Bottom</h1>
    </div>
</body>

</html> -->