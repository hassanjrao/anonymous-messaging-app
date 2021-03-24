<?php

ob_start();
include('../includes/db_connection.php');
session_start();


if (isset($_POST['submit'])) {


    $username = strtolower(trim($_POST['username']));
    $email = strtolower(trim($_POST['email']));
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);


    $stmt = $mysqli->prepare('INSERT INTO users (username, email, password) VALUES (?,?,?)');

    $response_arr = [];

    function insertUser($username, $email, $password)
    {
        global $stmt;
        global $response_arr;

        // using prepared statement several times with different variables
        if ($stmt && $stmt->bind_param('sss', $username, $email, $password) && $stmt->execute()) {
            // new user added

            $response_arr["status"] = "success";
        } else {
            $response_arr["status"] = "fail";
        }
    }

    insertUser($username, $email, $password);

    

    if ($response_arr["status"] == "success") {

        $response_arr["msg"] = ' <div class="alert alert-success alert-dismissible" role="alert">
        <strong>Congrats!</strong> Successfully Added
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    } else if ($response_arr["status"] == "success") {
        $response_arr[1] = '<div class="alert alert-danger alert-dismissible" role="alert">
        <strong>Oops!</strong> *This Email ' . $email . ' Already Exists!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    }

    echo json_encode($response_arr);


}
