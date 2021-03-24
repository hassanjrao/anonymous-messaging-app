<?php

include("db_connection.php");



if (isset($_REQUEST["functionName"])) {

    $functionName = $_REQUEST["functionName"];

    $functionName($conn);
}



function success($conn)

{

    $status = false;

    $success = isset($_REQUEST["success"]) ? $_REQUEST["success"] : "";

    if (!empty($success)) {

        unset($_SESSION["success"]);

        $status = true;
    }

    echo json_encode(array($status, $success));
}


// Check Username

function check_username($conn)
{

    $username = strtolower(trim($_REQUEST['username']));


    $query = $conn->prepare("SELECT username FROM users WHERE `username` = '$username'");
    $query->execute();

    if ($query->rowCount() > 0) {
        echo json_encode("Username Is Already Taken");
    } else {
        echo json_encode(true);
    }
}


//  Check User Email

function check_user_email($conn)
{

    $email = strtolower(trim($_REQUEST['email']));

    $query = $conn->prepare("SELECT email FROM users WHERE `email` = '$email'");
    $query->execute();

    if ($query->rowCount() > 0) {
        echo json_encode("This Email Is Already Registered");
    } else {
        echo json_encode(true);
    }
}





/**

 * check password stength

 */

function check_password_strength($conn)

{

    $password = isset($_REQUEST["newPassword"]) ? trim($_REQUEST["newPassword"]) : "";

    // Validate password strength

    $uppercase = preg_match('@[A-Z]@', $password);

    $lowercase = preg_match('@[a-z]@', $password);

    $number    = preg_match('@[0-9]@', $password);

    $specialChars = preg_match('@[^\w]@', $password);

    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {

        echo json_encode("Password Must Be 8 Char Long And Atleast One Digit One Special Character One Lower Alphabet And One Upper Alphabate And Underscore Not Allowed. Password Example : Test@132");
    } else {

        echo json_encode(true);
    }
}









// check state is available or not

function add_state($conn)
{

    $countryId = $_REQUEST['countryId'];

    $stateName = ucwords(strtolower(trim($_REQUEST['stateName'])));

    $edit = $_REQUEST['edit'];



    if ($edit == "") {

        if (mysqli_num_rows(mysqli_query($conn, "select * from `state` where `stateName` = '$stateName' and `countryId` = $countryId and `delete` = 0")) > 0) {

            echo json_encode("State Already Exits");
        } else {

            echo json_encode(true);
        }
    } else {

        if (mysqli_num_rows(mysqli_query($conn, "select * from `state` where `stateName` = '$stateName' and `countryId` = $countryId and `delete` = 0 and `stateId` != $edit")) > 0) {

            echo json_encode("State Already Exits");
        } else {

            echo json_encode(true);
        }
    }
}



// check city is already exits

function add_city($conn)
{

    $stateId = $_REQUEST['stateId'];

    $cityName = ucwords(strtolower(trim($_REQUEST['cityName'])));

    $edit = $_REQUEST['edit'];



    if ($edit == "") {

        if (mysqli_num_rows(mysqli_query($conn, "select * from `city` where `cityName` = '$cityName' and `stateId` = $stateId and `delete` = 0")) > 0) {

            echo json_encode("City Already Exits");
        } else {

            echo json_encode(true);
        }
    } else {

        if (mysqli_num_rows(mysqli_query($conn, "select * from `city` where `cityName` = '$cityName' and `stateId` = $stateId and `delete` = 0 and `cityId` != $edit")) > 0) {

            echo json_encode("City Already Exits");
        } else {

            echo json_encode(true);
        }
    }
}
