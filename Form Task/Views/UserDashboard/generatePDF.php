<?php 
    require_once('../../Views/dompdf/autoload.inc.php');
    require "../../DB/Connection.php";
    require "../../Model/Player.php";

    // Getting data from session
    session_start();
    if(isset($_SESSION['playerData'])){ 
        $playerData = $_SESSION['playerData'];
    }

    // getting players all data by id
    $conn = db_connection();
    $id = isset($playerData["ID"]) ? $playerData["ID"] : null;  // if id is not found then redirect to login page
    if($id == null ){
        echo '<script>alert("Something went wrong, Please Re-login");</script>';
        echo '<script>window.location.href = "../../Views/Auth/Login.php";</script>';
    }   
         
    $row = Player::getPlayerById($conn, $id);

    // code style and generate pdf
    use Dompdf\Dompdf;

    $dompdf = new Dompdf();

    $html = '
            <div style="width: 100%; height: 100%; border: 2px solid black; padding-left: 10px;">
                <h2 style="text-align: center; margin-bottom: 30px; text-decoration: underline;">KHELMAHAKUMBH REGISTRATION FORM</h2>
                
                <h2 style="color: #133b70">Player Details</h2>

                <p style="font-size: 18px;"> <span style="font-weight: 600;">Full Name = </span> '. 
                    (isset($row["FIRST_NAME"]) ? $row["FIRST_NAME"] : "") . '<span>&nbsp;</span>' .
                    (isset($row["MIDDLE_NAME"]) ? $row["MIDDLE_NAME"] : "") . '<span>&nbsp;</span>' .
                    (isset($row["LAST_NAME"]) ? $row["LAST_NAME"] : "") .'
                </p>

                <p style="font-size: 18px;"> <span style="font-weight: 600;">Age group = </span> 
                '. (isset($row["AGE_GROUP"]) ? $row["AGE_GROUP"] : "") .'
                </p>

                <p style="font-size: 18px;"> <span style="font-weight: 600;">Gender = </span> 
                '. (isset($row["GENDER"]) ? $row["GENDER"] : "") .'
                </p>

                <p style="font-size: 18px;"> <span style="font-weight: 600;">Date of Birth = </span> 
                '. (isset($row["DOB"]) ? date('d-m-Y', strtotime($playerData["DOB"])) : "") .'
                </p>
                
                <p style="font-size: 18px;"> <span style="font-weight: 600;">Sports Name = </span> 
                '. (isset($row["SPORTS_NAME"]) ? $row["SPORTS_NAME"] : "") .'
                </p>
                
                <p style="font-size: 18px;"> <span style="font-weight: 600;">Sub Sports Name = </span> 
                '. (isset($row["SUB_SPORTS_NAME"]) ? $row["SUB_SPORTS_NAME"] : "") .'
                </p>
                
                <p style="font-size: 18px;"> <span style="font-weight: 600;">Email = </span> 
                '. (isset($row["EMAIL"]) ? $row["EMAIL"] : "") .'
                </p>

                <p style="font-size: 18px;"> <span style="font-weight: 600;">Mobile Number = </span> 
                '. (isset($row["MOBILE_NUMBER"]) ? $row["MOBILE_NUMBER"] : "") .'
                </p>
                
                <p style="font-size: 18px;"> <span style="font-weight: 600;">Weight = </span> 
                '. (isset($row["WEIGHT"]) ? $row["WEIGHT"] : "") .'
                </p>

                <p style="font-size: 18px;"> <span style="font-weight: 600;">Height = </span> 
                '. (isset($row["HEIGHT"]) ? $row["HEIGHT"] : "") .'
                </p>

                <p style="font-size: 18px;"> <span style="font-weight: 600;">District = </span> 
                '. (isset($row["DISTRICT"]) ? $row["DISTRICT"] : "") .'
                </p>
                
                <p style="font-size: 18px;"> <span style="font-weight: 600;">Taluka = </span> 
                '. (isset($row["TALUKA"]) ? $row["TALUKA"] : "") .'
                </p>

                <p style="font-size: 18px;"> <span style="font-weight: 600;">Village = </span> 
                '. (isset($row["VILLAGE"]) ? $row["VILLAGE"] : "") .'
                </p>
                
                <p style="font-size: 18px;"> <span style="font-weight: 600;">Caste = </span> 
                '. (isset($row["CASTE"]) ? $row["CASTE"] : "") .'
                </p>
                <br>


                <h2 style="color: #133b70">Guardian Details</h2>
                
                <p style="font-size: 18px;"> <span style="font-weight: 600;">First Name = </span> 
                '. (isset($row["GUARDIAN_FIRST_NAME"]) ? $row["GUARDIAN_FIRST_NAME"] : "") .'
                </p>

                <p style="font-size: 18px;"> <span style="font-weight: 600;">Last Name = </span> 
                '. (isset($row["GUARDIAN_LAST_NAME"]) ? $row["GUARDIAN_LAST_NAME"] : "") .'
                </p>
                
                <p style="font-size: 18px;"> <span style="font-weight: 600;">Mobile Number = </span> 
                '. (isset($row["GUARDIAN_MOBILE_NUMBER"]) && $row["GUARDIAN_MOBILE_NUMBER"] != 0 ? $row["GUARDIAN_MOBILE_NUMBER"] : "") .'
                </p>
                <br>

                <h2 style="color: #133b70">Other Details</h2>
                
                <p style="font-size: 18px;"> <span style="font-weight: 600;">Coach Name = </span> 
                '. (isset($row["COACH_NAME"]) ? $row["COACH_NAME"] : "") .'
                </p>

                <p style="font-size: 18px;"> <span style="font-weight: 600;">Coach Mobile Number = </span> 
                '. (isset($row["COACH_MOBILE_NUMBER"]) && $row["GUARDIAN_MOBILE_NUMBER"] != 0 ? $row["COACH_MOBILE_NUMBER"] : "") .'
                </p>
                
                <p style="font-size: 18px;"> <span style="font-weight: 600;">Coach Address = </span> 
                '. (isset($row["COACH_ADDRESS"]) ? $row["COACH_ADDRESS"] : "") .'
                </p>
                <br>
                
            </div>';
            
    $dompdf->loadHtml($html);

    $dompdf->setPaper('A4');

    $dompdf->render();

    //  naming the pdf file
    $fileName = isset($playerData["FIRST_NAME"]) ? $playerData["FIRST_NAME"] . '_KhelMahaKumbh' : "KhelMahaKumbh_Player_Details";
    $dompdf->stream($fileName, array('Attachment'=>1));

    header("Location: Dashboard.php");
?>