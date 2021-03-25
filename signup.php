<?php
ob_start();





include_once("includes/db_connection.php");


if (isset($_POST['submit'])) {
    $username = strtolower(trim($_POST['username']));
    $email = strtolower(trim($_POST['email']));
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);

    $profile_picture="user_placeholder.jpg";

    $stmt = $conn->prepare("INSERT INTO `users`( `username`,`email`,`password`,`profile_picture`,`created_at`) VALUES (:username,:email,:password,:profile_picture,CURRENT_TIMESTAMP)");

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':profile_picture', $profile_picture);

    if ($stmt->execute()) {

        header("Location:signin.php?registered=true");
    }
}

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

            <div class="row justify-content-center">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>S'inscrire</h2>
                </div>

            </div>


            <div class="row justify-content-center mt-5 mb-4">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <form method="POST" action="" class="signup-form" id="form">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Email</label>
                            <input required name="email" type="email" class="form-control" id="" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Nom d'utilisateur</label>
                            <input required name="username" type="text" class="form-control" id="" placeholder="Nom d'utilisateur">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput2">le mot de passe</label>
                            <input required name="password" type="password" class="form-control" id="password" placeholder="le mot de passe">
                            <div id="passwordError"></div>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput2">Entrez à nouveau le mot de passe</label>
                            <input required name="cpassword" id="cpassword" type="password" class="form-control" id="" placeholder="Entrez à nouveau le mot de passe">
                            <div id="cpasswordError"></div>
                        </div>


                        <div class="form-group text-center pt-4">
                            <!-- <input type="hidden" name="submit"> -->
                            <button type="submit" name="submit" class="btn btn-light">nous faire parvenir</button>
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
        jQuery.validator.addMethod("accept", function(value, element, param) {
            return value.match(new RegExp("." + param + "$"));
        });


        $("#form").validate({
            rules: {
                username: {
                    required: true,
                    accept: "[a-zA-Z0-9]+",
                    remote: {
                        url: "includes/ajax_function.php",
                        type: "post",
                        data: {
                            functionName: "check_username",
                            userName: function() {
                                return $("input[name=\"userame\"]").val()
                            }
                        }
                    }
                },
                email: {
                    required: true,
                    remote: {
                        url: "includes/ajax_function.php",
                        type: "post",
                        data: {
                            functionName: "check_user_email",
                            email: function() {
                                return $("input[name=\"email\"]").val()
                            }
                        }
                    }
                },
                password: {
                    required: true,
                    remote: {
                        url: "includes/ajax_function.php",
                        type: "post",
                        data: {
                            functionName: "check_password_strength",
                            newPassword: function() {
                                return $("#password").val()
                            }
                        }
                    }
                },
                cpassword: {
                    required: true,
                    equalTo: "#password"
                },

            },
            messages: {
                username: {
                    required: "User Name Is Required",
                    accept: "Invalid User Name"
                },

                email: {
                    required: "Email Is Required",
                    email: "Invalid Email"
                },

                password: {
                    required: "Password Is Required"
                },
                cpassword: {
                    required: "Confirm Password Is Required",
                    equalTo: "Password Not Match"
                },

            },

            errorPlacement: function(error, element) {
                if (element.attr("name") == "password") {
                    error.appendTo("#passwordError");
                } else if (element.attr("name") == "cpassword") {
                    error.appendTo("#cpasswordError");

                } else {
                    error.insertAfter(element);
                }
            },

            errorElement: "div"
        })
    </script>


</body>

</html>

<?php
ob_end_flush();
?>