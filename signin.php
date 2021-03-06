<?php

ob_start();
include('includes/db_connection.php');
session_start();




if (isset($_POST['submit'])) {
    $email = strtolower(trim($_POST['email']));
    $password = trim($_POST['password']);

    // check vendor is exist or not

    $query_user = $conn->prepare("SELECT * FROM users WHERE email = '$email' AND role='user' AND active='true'");
    $query_user->execute();
    $result = $query_user->fetch(PDO::FETCH_ASSOC);

    if ($result) {

        if (password_verify($password, $result["password"])) {
            $_SESSION['user_id'] = $result['id'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['profile_picture'] = $result['profile_picture'];
            $_SESSION['success'] = "Login Successfully";
            if (isset($_POST["remember_me"])) {
                setcookie("remember_me", $result['id'], time() + (86400 * 30), "/"); // 86400 = 1 day
            }

            header("Location:profile.php");
        } else {

            $err = '
        
            <div class="row justify-content-center mt-5">
    
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Incorrect Password!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
    
            </div>
    
    ';
        }
    } else {
        $err = '
        
        <div class="row justify-content-center mt-5">

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Username or Email is wrong!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

        </div>

';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once("includes/head.php")  ?>
    <title>Sign In</title>


</head>

<body>

    <!-- Header Starts -->
    <?php include_once("includes/header.php") ?>
    <!-- Header Ends -->




    <!-- Header Starts -->

    <main>

        <div class="container mt-5 mb-4">

            <div class="row justify-content-center">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>S'identifier</h2>
                </div>

            </div>

            <?php

            if (isset($_GET["registered"]) && $_GET["registered"]) {
            ?>
                <div class="row justify-content-center mt-5">

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Successfully Registered!</strong> Enter Your Email & Password To Login
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center mt-2 mb-4">
                <?php
            } else if (isset($err) && $err != "") {
                echo $err;
                ?>
                    <div class="row justify-content-center mt-2 mb-4">
                    <?php
                } else {
                    ?>
                        <div class="row justify-content-center mt-5 mb-4">
                        <?php
                    }

                        ?>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <form id="form" method="POST" class="signup-form">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Email ou le nom d'utilisateur</label>
                                    <input name="email" required type="email" class="form-control" id="formGroupExampleInput" placeholder="Email">
                                </div>


                                <div class="form-group">
                                    <label for="formGroupExampleInput2">le mot de passe</label>
                                    <input name="password" required type="password" class="form-control" id="formGroupExampleInput2" placeholder="le mot de passe">
                                </div>




                                <div class="form-group text-center pt-4">
                                    <button name="submit" type="submit" class="btn btn-light">nous faire parvenir</button>
                                </div>
                            </form>



                        </div>

                        </div>

                    </div>




    </main>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script src="admin/assets/js/jquery-1.11.3.min.js"></script>
    <script src="admin/assets/js/jquery.validate.min.js"></script>


    <script>
        $("#form").validate({
            rules: {
                email: {
                    required: true
                },
                password: {
                    required: true
                }
            },
            messages: {
                email: {
                    required: "Email Is Required",
                    email: "Please Enter Valid Email Address"
                },
                password: {
                    required: "Password Is Required"
                }
            },
            errorPlacement: function(error, element) {

                error.insertAfter(element);

            }
        })
    </script>
</body>

</html>