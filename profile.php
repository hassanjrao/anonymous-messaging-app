<?php
// ob_start();

session_start();
include_once("includes/db_connection.php");



if (empty($_COOKIE['remember_me'])) {

    if (empty($_SESSION['user_id'])) {

        header('location: signin.php');
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
                    <h2>Afficher vos détails</h2>
                </div>

            </div>

            <div class="row justify-content-center">

                <div class="col-lg-6 col-md-6 col-sm-12 " id="notification-div">

                </div>

            </div>


            <?php

            $user_id = $_SESSION["user_id"];

            $query = $conn->prepare("SELECT * FROM users where id='$user_id'");
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);


            ?>



            <div class="row justify-content-center mt-5 mb-4">

                <div class="col-lg-6 col-md-6 col-sm-12">

                    <form id="form" class="profile-form">


                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <img class="img-fluid rounded-circle" width="150px" height="150px" src="<?php echo  is_null($result["profile_picture"]) ? "https://via.placeholder.com/150" : "images/user_images/" . $result["profile_picture"]; ?>">
                                <br>
                                <label for="inputAddress">Profile Picture</label>
                                <input type="file" name="profile_picture" value="" class="form-control">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Username</label>
                                <input name="username" readonly type="text" class="form-control" value="<?php echo $result["username"]; ?>" placeholder="Username">

                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Email</label>
                                <input readonly name="email" type="email" class="form-control" value="<?php echo $result["email"]; ?>" id="inputPassword4" placeholder="Email">
                            </div>


                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Prénom</label>
                                <input name="fname" type="text" class="form-control" value="<?php echo ucwords($result["fname"]); ?>" placeholder="Prénom">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Nom de famille</label>
                                <input name="lname" type="text" class="form-control" value="<?php echo ucwords($result["lname"]); ?>" placeholder="Nom de famille">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputAddress">Adresse</label>
                            <textarea name="address" class="form-control" placeholder="Adresse"><?php echo $result["address"]; ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="inputAddress">De campagne</label>
                            <input name="country" type="text" class="form-control" value="<?php echo ucwords($result["country"]); ?>" placeholder="De campagne">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Ville</label>
                                <input name="city" type="text" class="form-control" value="<?php echo ucwords($result["city"]); ?>" placeholder="Ville">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">Etat</label>
                                <input name="state" type="text" class="form-control" value="<?php echo ucwords($result["state"]); ?>" placeholder="Etat">
                            </div>




                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Téléphone</label>
                            <input name="phone" type="number" class="form-control" value="<?php echo $result["phone"]; ?>" placeholder="Téléphone">
                        </div>

                        <div class="form-group text-center mt-4">
                            <button name="submit" value="upd" type="submit" class="btn btn-light">nous faire parvenir
                            </button>
                        </div>
                    </form>



                </div>

            </div>

        </div>




    </main>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="admin/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>

    <script src="admin/assets/js/jquery-1.11.3.min.js"></script>
    <script src="admin/assets/js/jquery.validate.min.js"></script>



    <script>
        $('#form').validate({ // initialize the plugin
            ignore: [],

            rules: {

                username: {
                    required: true,

                },
                email: {
                    required: true,
                    email: true

                },



            },
            submitHandler: function(form) { // for demo
                var form_data = new FormData($("#form")[0]);

                console.log(form_data);

                $.ajax({
                    type: "POST",
                    url: "send_data/send_profile_data.php",
                    data: form_data,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        var res = $.parseJSON(data);
                        console.log(res);
                        $("#notification-div").html(res["msg"]);


                        $('html, body').animate({
                            scrollTop: $("#notification-div").offset().top
                        }, 100);

                        if (res["status"] == "success") {
                            setTimeout(function() {
                                location.reload();
                            }, 1000)
                        }
                    }
                });


            }
        });
    </script>

</body>

</html>

<?php

// ob_end_flush();

?>