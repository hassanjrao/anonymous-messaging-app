<?php
ob_start();
include('includes/db_connection.php');
session_start();

if(!isset($_GET["msg_id"])){
    header("location: all_messages.php");
}
$msg_id=$_GET["msg_id"];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Anonymys Posting App</title>

    <?php include_once("includes/head.php")  ?>

</head>

<body>

    <!-- Header Starts -->
    <?php include_once("includes/header.php") ?>
    <!-- Header Ends -->



    <!-- Header Starts -->

    <main>


        <div class="container mt-5 mb-4">


            <!-- Add Message Starts -->

            <?php
            if (isset($_SESSION["user_id"])) {
            ?>

                <div class="row">
                    <div class="col-lg-12">
                        <h2>Message</h2>
                    </div>
                </div>

               

                            <section id="messages">
                                <?php


                                $query = $conn->prepare(

                                    "SELECT messages.*,users.id as user_id, users.username as username, users.profile_picture as user_profile_picture
                         
                                        FROM users
                                        INNER JOIN messages
                                        ON messages.user_id=users.id
                  
                                        where messages.id='$msg_id'"
                                );
                                $query->execute();

                                $msg_posts = "";

                                // https://via.placeholder.com/50


                                while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <div class="msg-post">


                                        <div class="row justify-content-center mt-5 mb-5">

                                            <div class="col-lg-8 post-card background-color-dark-gery pt-4 pb-4">

                                                <div class="row main-msg">
                                                    <div class="col-lg-12 post-card-header pb-4">
                                                        <div class="row">
                                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                                <img class="user-image" src="<?php echo "images/user_images/" . $result["user_profile_picture"] ?>" width="50px" height="50px" alt="">

                                                            </div>

                                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                                <h5><?php echo $result["username"]; ?></h5>
                                                                <p class="post-card-date"><?php echo $result["created_at"] ?></p>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-12 post-card-body">
                                                        <p>
                                                            <?php

                                                            echo $result["message"];
                                                            ?>

                                                        </p>
                                                    </div>

                                                </div>

                                                <div class="comment-share row">
                                                    <div class="col-lg-12">
                                                        <i class="fas fa-comment-alt mr-5"><span class=" ml-2">comment</span></i>
                                                        <i class="fas fa-comment-alt mr-5"><span class=" ml-2">share</span></i>

                                                    </div>

                                                </div>

                                                <div class="add-comment row">
                                                    <div class="col-lg-12 mt-4 ">
                                                        <form id="<?php echo "form-comment-" . $result["id"]; ?>">
                                                            <input type="hidden" name="message_id" value="<?php echo $result["id"]; ?>">
                                                            <div class="row">
                                                                <div class="col-lg-1">
                                                                    <img class="user-image" src="<?php echo "images/user_images/" . $result["user_profile_picture"] ?>" width="50px" height="50px" alt="">
                                                                </div>
                                                                <div class="col-lg-11 justify-content-center mt-1">
                                                                    <div class="input-group mb-3">

                                                                        <input type="text" id="<?php echo "comment-" . $result["id"]; ?>" class="form-control" placeholder="Taper un commentaire">
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text"><button type="button" class="btn" onclick='submitComment(<?php echo $result["id"] ?>)'><i class="fas fa-arrow-circle-right"></i></button></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                                <?php
                                                $message_id = $result["id"];
                                                $c = 1;
                                                ?>

                                                <div class="comments row" id=<?php echo "comments-div-$message_id" ?>>
                                                    <?php

                                                    $query_comment = $conn->prepare(

                                                        "SELECT comments.*, users.id as comment_user_id, users.username as comment_username, users.profile_picture as comment_user_pic
                                         FROM comments 
                                         INNER JOIN users
                                         ON comments.user_id=users.id
                                         WHERE comments.message_id='$message_id'
                                        order by comments.id desc
                                        "
                                                    );
                                                    $query_comment->execute();


                                                    while ($result_comment = $query_comment->fetch(PDO::FETCH_ASSOC)) {

                                                        $c++;
                                                    ?>

                                                        <div class="col-lg-12 post-card-header mt-4">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                                    <img class="user-image" src="<?php echo "images/user_images/" . $result_comment["comment_user_pic"] ?>" width="30px" height="30px" alt="">
                                                                    <span>
                                                                        <span><?php echo  $result_comment["comment_username"] ?></span> <br>
                                                                        <span style="font-size: xx-small;"><?php echo  $result_comment["created_at"] ?></span>
                                                                    </span>

                                                                </div>

                                                                <div class="col-lg-10 col-md-10 col-sm-10">

                                                                    <p>

                                                                        <?php echo $result_comment["comment"] ?>
                                                                    </p>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    <?php

                                                    }

                                                    ?>




                                                </div>
                                               
                                            </div>


                                        </div>

                                    </div>
                                <?php
                                }
                                ?>

                            </section>

                        </div>


                    </div>

                </div>

            <?php
            }
            ?>
            <!-- Add Message Ends -->







        </div>




    </main>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="admin/assets/js/jquery-1.11.3.min.js"></script>
    <script src="admin/assets/js/jquery.validate.min.js"></script>



    <script>
      
        function submitComment(id) {
            var comment = $("#comment-" + id).val();
            var message_id = id;

            console.log(comment);

            if (comment == "") {
                $("#comment-" + id).addClass('comment');
                document.getElementById("comment-" + id).placeholder = "Veuillez écrire quelque chose..";
            } else {
                $.ajax({
                    type: "POST",
                    url: "send_data/send_comment_data.php?msg=true",
                    data: {
                        comment: comment,
                        message_id: message_id
                    },
                    success: function(data) {
                        // var res = $.parseJSON(data);
                        console.log(data);
                        $("#comments-div-" + id).html(data);


                        $('html, body').animate({
                                scrollTop: $("#comments-div-" + id).offset().top
                            },
                            'slow');



                    }
                });
            }
        }
    </script>


</body>

</html>

<?php

ob_end_flush();

?>