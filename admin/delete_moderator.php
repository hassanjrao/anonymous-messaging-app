<?php
ob_start();
include('../includes/db_connection.php');
session_start();

if (empty($_COOKIE['ad_remember_me'])) {

    if (empty($_SESSION['ad_user_id'])) {

        header('location:../login.php');
    }
}





if (isset($_GET['id'])) {

    $del_id = $_GET["id"];


    $del = $conn->prepare("DELETE FROM users WHERE id='$del_id'");

    if ($del->execute()) {

        header("location:all_moderators.php?status=del_succ");
    } else {
        header("location:all_moderators.php?status=del_fail;");
    }
}
