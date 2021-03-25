<?php

ob_start();
include('../includes/db_connection.php');
session_start();
if (isset($_SESSION["user_id"])) {

    $response_arr[] = null;



    $comment = trim($_POST["comment"]);
    $message_id = $_POST["message_id"];

    $user_id = $_SESSION["user_id"];

    $stmt = $conn->prepare("INSERT INTO `comments`( `comment`,`message_id`,`user_id`) VALUES (:comment,:message_id,:user_id)");

    $stmt->bindParam(':comment', $comment);
    $stmt->bindParam(':message_id', $message_id);
    $stmt->bindParam(':user_id', $user_id);




    if ($stmt->execute()) {

        $comments = "";


        $query_comment = $conn->prepare(

            "SELECT comments.*, users.id as comment_user_id, users.username as comment_username, users.profile_picture as comment_user_pic
         FROM comments 
         INNER JOIN users
         ON comments.user_id=users.id
         WHERE comments.message_id='$message_id'
        order by comments.id desc
        LIMIT 3"
        );
        $query_comment->execute();

        while ($result_comment = $query_comment->fetch(PDO::FETCH_ASSOC)) {

            $comments .= "

        <div class='col-lg-12 post-card-header mt-4'>
            <div class='row'>
            <div class='col-lg-2 col-md-2 col-sm-2'>
                <img class='user-image' src=images/user_images/" . $result_comment["comment_user_pic"] . " width='30px' height='30px' alt=''>
                <span>
                    <span>" . $result_comment["comment_username"] . "</span> <br>
                    <span style='font-size: xx-small;'>" . $result_comment["created_at"] . "</span>
                </span>

            </div>

            <div class='col-lg-10 col-md-10 col-sm-10'>

                <p>
                " . $result_comment["comment"] . "
                </p>

            </div>

        </div>

    </div>

   
      ";
        }




        echo $comments;
    } else {
        $response_arr["status"] = "fail";
        $response_arr["msg"] = '<div class="alert alert-danger alert-dismissible" role="alert">
    <strong>Oops!</strong> *Something Went Wrong!
   
</div>';
    }
}
else {
    echo "<span class='ml-5 text-danger'>*Sign in to comment</span>";
}

// echo json_encode($response_arr);
