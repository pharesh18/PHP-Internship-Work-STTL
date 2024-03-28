<?php 
    class User{
        private $PASSWORD;
        private $EMAIL;
        private $KMKID;
        
        public function __construct($POST, $LOGIN_TYPE){
            if($LOGIN_TYPE == "ADMIN"){
                $this->EMAIL = $POST['email'];
            }else{
                $this->KMKID = $POST['KMKID'];
            }
            $this->PASSWORD = $POST['password'];
        }

        public function login($conn){
            $sql = "SELECT ID, FIRST_NAME, LAST_NAME, EMAIL, MOBILE_NUMBER, KMKID, DOB, SPORTS_NAME FROM Player WHERE KMKID = '$this->KMKID' AND PASSWORD = '$this->PASSWORD'";
            $result = mysqli_query($conn, $sql);
            if($result){
                $row = mysqli_fetch_assoc($result);
                session_start();
                if (isset($_SESSION['userData'])) {
                    unset($_SESSION['userData']);
                }
                $_SESSION['playerData'] = $row;
                return $row;
            }else{
                die("Error while fetching data");
            }
        }

        public function adminLogin($conn){
            $sql = "SELECT ID, FIRST_NAME, LAST_NAME, EMAIL, IS_ADMIN FROM User WHERE EMAIL = '$this->EMAIL' AND PASSWORD = '$this->PASSWORD'";
            $result = mysqli_query($conn, $sql);
            if($result){
                $row = mysqli_fetch_assoc($result);
                session_start();
                if (isset($_SESSION['playerData'])) {
                    unset($_SESSION['playerData']);
                }
                
                $_SESSION['userData'] = $row;
                return $row;
            }else{
                die("Error while fetching data");
            }
        }
    }
?>