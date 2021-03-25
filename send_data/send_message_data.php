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



$message = trim($_POST["message"]);

$user_id = $_SESSION["user_id"];

$stmt = $conn->prepare("INSERT INTO `messages`( `message`,`user_id`,`created_at`) VALUES (:message,:user_id,CURRENT_TIMESTAMP)");

$stmt->bindParam(':message', $message);
$stmt->bindParam(':user_id', $user_id);




if ($stmt->execute()) {



    $query = $conn->prepare(

        "SELECT messages.*,users.id as user_id, users.username as username, users.profile_picture as user_profile_picture
    
        FROM messages
        INNER JOIN users
        ON messages.user_id=users.id
        order by messages.id desc"
    );
    $query->execute();

    $msg_posts = "";

// https://via.placeholder.com/50


    while ($result = $query->fetch(PDO::FETCH_ASSOC)) {

        $msg_posts .=   "
        <div class='msg-post'>
            <div class='row justify-content-center mt-5 mb-5'>
                <div class='col-lg-8 post-card background-color-dark-gery pt-4 pb-4'>
                    <div class='row main-msg'>
                        <div class='col-lg-12 post-card-header pb-4'>
                            <div class='row'>
                                <div class='col-lg-1 col-md-1 col-sm-1'>


                                    <img class='user-image' src=images/user_images/".$result["user_profile_picture"]." width='50px' height='50px' alt=''>
    
                                </div>
    
                                <div class='col-lg-4 col-md-4 col-sm-4'>
                                    <h5>".$result["username"]."</h5>
                                    <p class='post-card-date'>".$result["created_at"]."</p>
                                </div>
    
                            </div>
    
                        </div>
    
                        <div class='col-lg-12 post-card-body'>
                            <p>
                               
                                     " . $result["message"] . "

                            </p>
                        </div>
    
                    </div>
    
                    <div class='comment-share row'>
                        <div class='col-lg-12'>
                            <i class='fas fa-comment-alt mr-5'><span class=' ml-2'>comment</span></i>
                            <i class='fas fa-comment-alt mr-5'><span class=' ml-2'>share</span></i>
    
                        </div>
    
                    </div>
    
                    <div class='add-comment row'>
                        <div class='col-lg-12 mt-4 '>
    
                            <div class='row'>
                                <div class='col-lg-1'>
                                    <img class='user-image' src=images/user_images/".$result["user_profile_picture"]." width='50px' height='50px' alt=''>
                                </div>
                                <div class='col-lg-11 justify-content-center mt-1'>
                                    <div class='input-group mb-3'>
    
                                        <input  type='text' class='form-control' placeholder='Taper un commentaire'>
                                        <div class='input-group-append'>
                                            <span class='input-group-text'><button type='submit' class='btn' name='sa'><i class='fas fa-arrow-circle-right'></i></button></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
    
                </div>
    
    
            </div>
    
        </div>
    
    
            ";
    }



    echo $msg_posts;
} else {
    $response_arr["status"] = "fail";
    $response_arr["msg"] = '<div class="alert alert-danger alert-dismissible" role="alert">
    <strong>Oops!</strong> *Something Went Wrong!
   
</div>';
}


// echo json_encode($response_arr);
