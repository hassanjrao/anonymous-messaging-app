<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymys Posting App</title>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />




    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/custom.css">

    <script src="https://kit.fontawesome.com/e98e60b820.js" crossorigin="anonymous"></script>

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


            <div class="row justify-content-center mt-5 mb-4">

                <div class="col-lg-6 col-md-6 col-sm-12">

                    <form class="profile-form">

                        <div class="form-group">
                            <label for="inputAddress">De campagne</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="De campagne">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Prénom</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Prénom">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Nom de famille</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Nom de famille">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputAddress">Adresse</label>
                            <textarea class="form-control" placeholder="Adresse"></textarea>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputCity">Ville</label>
                                <input type="text" class="form-control" id="inputCity" placeholder="Ville">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Etat</label>
                                <input type="text" class="form-control" id="inputCity" placeholder="Etat">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputCity">Code postal</label>
                                <input type="text" class="form-control" id="inputCity" placeholder="Etat">
                            </div>


                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Téléphone</label>
                            <input type="number" class="form-control" id="inputAddress" placeholder="Téléphone">
                        </div>

                        <div class="form-group text-center mt-4">
                            <button type="submit" class="btn btn-light">nous faire parvenir
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

</body>

</html>