<?php

ob_start();
include('../includes/db_connection.php');
session_start();

if (empty($_COOKIE['remember_me'])) {

    if (empty($_SESSION['user_id'])) {

        header('location:../signin.php');
    }
}


$response_arr[] = null;



$fname = strtolower(trim($_POST["fname"]));
$lname = strtolower(trim($_POST["lname"]));
$address = strtolower(trim($_POST["address"]));
$country = strtolower(trim($_POST["country"]));
$city = strtolower(trim($_POST["city"]));
$state = strtolower(trim($_POST["state"]));
$phone = strtolower(trim($_POST["phone"]));

$user_id = $_SESSION["user_id"];


$query_user = $conn->prepare("SELECT * FROM users WHERE `id` = '$user_id'");
$query_user->execute();


$user_result = $query_user->fetch(PDO::FETCH_ASSOC);






if ($_FILES['profile_picture']['size'] == 0) {




    $stmt = $conn->prepare("UPDATE `users` SET  fname=:fname,lname=:lname, address=:address,country=:country,city=:city,state=:state,phone=:phone,updated_at=CURRENT_TIMESTAMP WHERE id=:id");



    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':state', $state);
    $stmt->bindParam(':phone', $phone);

    $stmt->bindParam(':id', $user_id);
} else {


    $user_prev_prof_pic = $user_result["profile_picture"];
    if ($user_prev_prof_pic != "user_placeholder.jpg") {
        unlink("../images/user_images/$user_prev_prof_pic");
    }
    $folder = "../images/user_images/";
    $profile_picture =  time() . $_FILES['profile_picture']['name'];
    $path = $folder . $profile_picture;

    move_uploaded_file($_FILES['profile_picture']['tmp_name'], $path);

    $stmt = $conn->prepare("UPDATE `users` SET profile_picture=:profile_picture, fname=:fname,lname=:lname, address=:address,country=:country,city=:city,state=:state,phone=:phone,updated_at=CURRENT_TIMESTAMP WHERE id=:id");


    $stmt->bindParam(':profile_picture', $profile_picture);
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':state', $state);
    $stmt->bindParam(':phone', $phone);

    $stmt->bindParam(':id', $user_id);
}





if ($stmt->execute()) {


    $response_arr["status"] = "success";

    $response_arr["msg"] = ' <div class="alert alert-success alert-dismissible" role="alert">
    <strong>Congrats!</strong> Successfully Updated 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>';
} else {
    $response_arr["status"] = "fail";
    $response_arr["msg"] = '<div class="alert alert-danger alert-dismissible" role="alert">
    <strong>Oops!</strong> *Something Went Wrong!
   
</div>';
}


echo json_encode($response_arr);
