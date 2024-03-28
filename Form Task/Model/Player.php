<?php
class Player
{
    private $FIRST_NAME;
    private $MIDDLE_NAME;
    private $LAST_NAME;
    private $AGE_GROUP;
    private $GENDER;
    private $DOB;
    private $SPORTS_NAME;
    private $SUB_SPORTS_NAME;
    private $MOBILE_NUMBER;
    private $EMAIL;
    private $PASSWORD;
    private $WEIGHT;
    private $HEIGHT;
    private $DISTRICT;
    private $TALUKA;
    private $VILLAGE;
    private $CASTE;
    private $GUARDIAN_FIRST_NAME;
    private $GUARDIAN_LAST_NAME;
    private $GUARDIAN_MOBILE_NUMBER;
    private $COACH_NAME;
    private $COACH_MOBILE_NUMBER;
    private $COACH_ADDRESS;
    private $KMKID;
    public function __construct($POST)
    {
        $this->FIRST_NAME = $POST['firstName'];
        $this->MIDDLE_NAME = $POST['middleName'];
        $this->LAST_NAME = $POST['lastName'];
        $this->AGE_GROUP = $POST['ageGroup'];
        $this->GENDER = $POST['gender'];
        $this->DOB = $POST['dob'];
        $this->SPORTS_NAME = $POST['sportsName'];
        $this->SUB_SPORTS_NAME = $POST['subSportsName'];
        $this->MOBILE_NUMBER = $POST['mobileNumber'];
        $this->EMAIL = $POST['email'];
        $this->PASSWORD = $POST['password'];
        $this->WEIGHT = $POST['weight'];
        $this->HEIGHT = $POST['height'];
        $this->DISTRICT = $POST['district'];
        $this->TALUKA = $POST['taluka'];
        $this->VILLAGE = $POST['village'];
        $this->CASTE = $POST['caste'];
        $this->GUARDIAN_FIRST_NAME = $POST['guardianFirstName'];
        $this->GUARDIAN_LAST_NAME = $POST['guardianLastName'];
        $this->GUARDIAN_MOBILE_NUMBER = $POST['guardianMobileNumber'];
        $this->COACH_NAME = $POST['coachName'];
        $this->COACH_MOBILE_NUMBER = $POST['coachMobileNumber'];
        $this->COACH_ADDRESS = $POST['coachAddress'];
        $this->KMKID = $this->generateKMKID($POST['email']);
    }

    public function generateKMKID($email){
        $randomComponent = bin2hex(random_bytes(2)); 
        $uniqueString = $email . $randomComponent;
        $hashedString = sha1($uniqueString);
        $result = substr($hashedString, 0, 6);
        return $result;
    }

    public function Create_Player($conn)
    {
        $sql = "INSERT INTO `Player` (FIRST_NAME, MIDDLE_NAME, LAST_NAME, AGE_GROUP, GENDER, DOB, SPORTS_NAME, SUB_SPORTS_NAME, MOBILE_NUMBER, EMAIL, PASSWORD, WEIGHT, HEIGHT, DISTRICT, TALUKA, VILLAGE, CASTE, GUARDIAN_FIRST_NAME, GUARDIAN_LAST_NAME, GUARDIAN_MOBILE_NUMBER, COACH_NAME, COACH_MOBILE_NUMBER, COACH_ADDRESS, KMKID )
                    VALUES('$this->FIRST_NAME', '$this->MIDDLE_NAME', '$this->LAST_NAME', '$this->AGE_GROUP', '$this->GENDER', '$this->DOB', '$this->SPORTS_NAME',  '$this->SUB_SPORTS_NAME', '$this->MOBILE_NUMBER', '$this->EMAIL', '$this->PASSWORD', '$this->WEIGHT', '$this->HEIGHT', '$this->DISTRICT', '$this->TALUKA',   '$this->VILLAGE', '$this->CASTE', '$this->GUARDIAN_FIRST_NAME', '$this->GUARDIAN_LAST_NAME', '$this->GUARDIAN_MOBILE_NUMBER', '$this->COACH_NAME', '$this->COACH_MOBILE_NUMBER', '$this->COACH_ADDRESS', '$this->KMKID')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            return $this->KMKID;
        } else {
            die(mysqli_error($conn));
        }
    }

    public static function getAllPlayerData($conn)
    {
        $sql = "SELECT
                ID, FIRST_NAME, MIDDLE_NAME, LAST_NAME, AGE_GROUP,
                CASE
                    WHEN GENDER LIKE '%M%'
                        THEN 'MALE'
                        ELSE 'FEMALE'
                END AS GENDER,
                DOB, SPORTS_NAME, MOBILE_NUMBER, EMAIL
                FROM Player";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            return $result;
        } else {
            die("Error while fetching data");
        }
    }

    public static function getPlayerById($conn, $id)
    {
        $sql = "SELECT *,
                CASE
                    WHEN GENDER = 'M' THEN 'Male'
                    ELSE 'Female'
                END AS GENDER
                FROM Player WHERE ID = $id";

        $result = mysqli_query($conn, $sql);
        if (!$result) {
            die("Error while fetching player details");
        } else {
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
    }
    public function UpdatePlayerById($conn, $id)
    {
        $sql = "UPDATE Player SET
                    FIRST_NAME = '$this->FIRST_NAME',
                    MIDDLE_NAME = '$this->MIDDLE_NAME',
                    LAST_NAME = '$this->LAST_NAME',
                    AGE_GROUP = '$this->AGE_GROUP',
                    GENDER = '$this->GENDER',
                    DOB = '$this->DOB',
                    SPORTS_NAME = '$this->SPORTS_NAME',
                    SUB_SPORTS_NAME = '$this->SUB_SPORTS_NAME',
                    MOBILE_NUMBER = '$this->MOBILE_NUMBER',
                    EMAIL = '$this->EMAIL',
                    WEIGHT = '$this->WEIGHT',
                    HEIGHT = '$this->HEIGHT',
                    DISTRICT = '$this->DISTRICT',
                    TALUKA = '$this->TALUKA',
                    VILLAGE = '$this->VILLAGE',
                    CASTE = '$this->CASTE',
                    GUARDIAN_FIRST_NAME = '$this->GUARDIAN_FIRST_NAME',
                    GUARDIAN_LAST_NAME = '$this->GUARDIAN_LAST_NAME',
                    GUARDIAN_MOBILE_NUMBER = '$this->GUARDIAN_MOBILE_NUMBER',
                    COACH_NAME = '$this->COACH_NAME',
                    COACH_MOBILE_NUMBER = '$this->COACH_MOBILE_NUMBER',
                    COACH_ADDRESS = '$this->COACH_ADDRESS'
                    WHERE ID = $id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            return true;
        } else {
            die("Error in updating the data");
        }
    }

    public static function DeletePlayerById($conn, $id)
    {
        $sql = "DELETE FROM Player WHERE ID = $id";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            die("Error while deleting Player");
        } else {
            return true;
        }
    }
}