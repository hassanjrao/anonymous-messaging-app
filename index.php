<?php

ob_start();
session_start();

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



    <!-- Carousal Starts -->

    <div class="container">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://dummyimage.com/400x200/000/fff" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5> Caption Heading</h5>
                        <p> Caption text</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://dummyimage.com/400x200/000/fff" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5> Caption Heading</h5>
                        <p> Caption text</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://dummyimage.com/400x200/000/fff" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5> Caption Heading</h5>
                        <p> Caption text</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>

    <!-- Carousal Ends -->





    <main>

        <div class="container mt-5 mb-4">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <a class="btn btn-light" href="all_messages.php">Add Message</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h2>voir les messages</h2>
                </div>
            </div>

            <!-- Message post starts -->

            <div class="msg-post">


                <div class="row justify-content-center mt-5 mb-5">

                    <div class="col-lg-8 post-card background-color-dark-gery pt-4 pb-4">

                        <div class="row main-msg">
                            <div class="col-lg-12 post-card-header pb-4">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1">
                                        <img class="user-image" src="https://via.placeholder.com/50" width="50px" height="50px" alt="">

                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <h5>asfadf</h5>
                                        <p class="post-card-date">19 March at 10:15</p>
                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-12 post-card-body">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat vel, iure sequi,
                                    quibusdam
                                    adipisci, tenetur voluptatum minima ad natus cupiditate architecto. Fugiat,
                                    doloremque
                                    voluptatibus quo reprehenderit perferendis nam veniam magni!
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos vel suscipit corporis
                                    pariatur ab eaque praesentium, fugiat ad. Provident itaque repellat, eius nulla
                                    voluptatum
                                    minus corporis deserunt aut fugiat quam.
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos totam hic, non culpa
                                    deleniti
                                    adipisci. Recusandae pariatur nostrum voluptas a perspiciatis dolorum dolorem ullam?
                                    Cum
                                    excepturi vitae modi voluptates veritatis!

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

                                <div class="row">
                                    <div class="col-lg-1">
                                        <img class="user-image" src="https://via.placeholder.com/50" width="50px" height="50px" alt="">
                                    </div>
                                    <div class="col-lg-11 justify-content-center mt-1">
                                        <form>
                                            <div class="input-group mb-3">

                                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><button type="submit" name="sa" class="btn"><i class="fas fa-arrow-circle-right"></i></button></span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


                </div>

            </div>


            <div class="msg-post">


                <div class="row justify-content-center mt-5 mb-5">

                    <div class="col-lg-8 post-card background-color-dark-gery pt-4 pb-4">

                        <div class="main-msg row">
                            <div class="col-lg-12 post-card-header pb-4">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1">
                                        <img class="user-image" src="https://via.placeholder.com/50" width="50px" height="50px" alt="">

                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <h5>asfadf</h5>
                                        <p class="post-card-date">19 March at 10:15</p>
                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-12 post-card-body">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat vel, iure sequi,
                                    quibusdam
                                    adipisci, tenetur voluptatum minima ad natus cupiditate architecto. Fugiat,
                                    doloremque
                                    voluptatibus quo reprehenderit perferendis nam veniam magni!
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos vel suscipit corporis
                                    pariatur ab eaque praesentium, fugiat ad. Provident itaque repellat, eius nulla
                                    voluptatum
                                    minus corporis deserunt aut fugiat quam.
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos totam hic, non culpa
                                    deleniti
                                    adipisci. Recusandae pariatur nostrum voluptas a perspiciatis dolorum dolorem ullam?
                                    Cum
                                    excepturi vitae modi voluptates veritatis!

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

                                <div class="row">
                                    <div class="col-lg-1">
                                        <img class="user-image" src="https://via.placeholder.com/50" width="50px" height="50px" alt="">
                                    </div>
                                    <div class="col-lg-11 justify-content-center mt-1">
                                        <div class="input-group mb-3">

                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><button type="submit" class="btn" name="sa"><i class="fas fa-arrow-circle-right"></i></button></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="comments row">

                            <div class="col-lg-12 post-card-header mt-4">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <img class="user-image" src="https://via.placeholder.com/30" width="30px" height="30px" alt="">
                                        <span>
                                            <span>asfadf</span> <br>
                                            <span style="font-size: xx-small;">19 March at 10:15</span>
                                        </span>

                                    </div>

                                    <div class="col-lg-10 col-md-10 col-sm-10">

                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam vel labore
                                            blanditiis a nobis magni minus ad autem animi veritatis iusto fugit
                                            praesentium
                                            suscipit voluptas, dolorum cum maxime quas et.
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam vel labore
                                            blanditiis a nobis magni minus ad autem animi veritatis iusto fugit
                                            praesentium
                                            suscipit voluptas, dolorum cum maxime quas et.

                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam vel labore
                                            blanditiis a nobis magni minus ad autem animi veritatis iusto fugit
                                            praesentium
                                            suscipit voluptas, dolorum cum maxime quas et.</p>

                                    </div>

                                </div>

                            </div>


                            <div class="col-lg-12 post-card-header mt-4">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <img class="user-image" src="https://via.placeholder.com/30" width="30px" height="30px" alt="">
                                        <span>
                                            <span>asfadf</span> <br>
                                            <span style="font-size: xx-small;">19 March at 10:15</span>
                                        </span>

                                    </div>

                                    <div class="col-lg-10 col-md-10 col-sm-10">

                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam vel labore
                                            blanditiis a nobis magni minus ad autem animi veritatis iusto fugit
                                            praesentium
                                            suscipit voluptas, dolorum cum maxime quas et.
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam vel labore
                                            blanditiis a nobis magni minus ad autem animi veritatis iusto fugit
                                            praesentium
                                            suscipit voluptas, dolorum cum maxime quas et.

                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam vel labore
                                            blanditiis a nobis magni minus ad autem animi veritatis iusto fugit
                                            praesentium
                                            suscipit voluptas, dolorum cum maxime quas et.</p>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-12">
                                <a href="all_posts.php">View All Comments</a>
                            </div>

                        </div>










                    </div>


                </div>

            </div>

            <!-- Message post ends -->



            <div class="row">
                <div class="col-lg-12 text-center">
                    <a class="btn btn-light" href="all_posts.php">voir plus de messages</a>
                </div>
            </div>




        </div>


        <div class="container-fluid background-color-black">

            <div class="container  pt-5 pb-5">

                <!-- top comments start  -->
                <section>
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>Annonces vedettes</h2>
                        </div>

                    </div>

                    <div class="row mt-5 mb-5 justify-content-center">


                        <div class="col-lg-4 post-card-header pt-2 pb-2 mr-4 mt-2 background-color-dark-gery">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <img class="user-image" src="https://via.placeholder.com/50" width="50px" height="50px" alt="">

                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <h5>asfadf</h5>
                                    <p class="post-card-date">19 March at 10:15</p>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat vel, iure sequi,
                                        quibusdam
                                        adipisci, tenetur voluptatum minima ad natus cupiditate architecto. Fugiat,
                                        doloremque
                                        voluptatibus quo reprehenderit perferendis nam veniam magni!
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos vel suscipit corporis
                                        pariatur ab eaque praesentium, fugiat ad. Provident itaque repellat, eius nulla
                                        voluptatum
                                        minus corporis deserunt aut fugiat quam.
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos totam hic, non culpa
                                        deleniti
                                        adipisci. Recusandae pariatur nostrum voluptas a perspiciatis dolorum dolorem ullam?
                                        Cum
                                        excepturi vitae modi voluptates veritatis!

                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <i class="fas fa-comment-alt mr-5"><span class=" ml-2">ajouter et voir les
                                            commentaires</span></i>
                                </div>
                            </div>

                        </div>



                        <div class="col-lg-4 post-card-header pt-2 pb-2 mr-4 mt-2 background-color-dark-gery">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <img class="user-image" src="https://via.placeholder.com/50" width="50px" height="50px" alt="">

                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <h5>asfadf</h5>
                                    <p class="post-card-date">19 March at 10:15</p>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat vel, iure sequi,
                                        quibusdam
                                        adipisci, tenetur voluptatum minima ad natus cupiditate architecto. Fugiat,
                                        doloremque
                                        voluptatibus quo reprehenderit perferendis nam veniam magni!
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos vel suscipit corporis
                                        pariatur ab eaque praesentium, fugiat ad. Provident itaque repellat, eius nulla
                                        voluptatum
                                        minus corporis deserunt aut fugiat quam.
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos totam hic, non culpa
                                        deleniti
                                        adipisci. Recusandae pariatur nostrum voluptas a perspiciatis dolorum dolorem ullam?
                                        Cum
                                        excepturi vitae modi voluptates veritatis!

                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <i class="fas fa-comment-alt mr-5"><span class=" ml-2">ajouter et voir les
                                            commentaires</span></i>
                                </div>
                            </div>

                        </div>



                    </div>
                </section>
                <br>

                <!-- top comments ends -->


            </div>

            <!-- Banner section starts -->
            <section>

                <div class="hero-image img-fluid">
                    <div class="hero-text">
                        <h2 style="font-size:45px">interagissez avec les autres et</h2>
                        <h1 style="font-size:40px">vendez vos produits</h1>

                        <!-- <button>Hire me</button> -->
                    </div>
                </div>

            </section>

            <!-- Banner section ends -->

            <div class="container  pt-5 pb-5">
                <!-- about us starts -->

                <section>

                    <div class="row mt-5 mb-4 ">
                        <div class="col-lg-12">
                            <h4>à propos de nous</h4>
                        </div>

                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-12 ">

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet scelerisque arcu. Ut
                                et
                                dictum nulla. Ut at nisl neque. Aenean vehicula feugiat sodales. Cras nulla lacus, ecitur
                                sit
                                amet
                                pellentesque a, mattis at turpis. Fusce viverra elementum tristique. Nulla ultricies, lorem
                                eu
                                iaculis hendrerit, justo turpis posuere est, vel ullamcorper orci justo ac leo. Praesent
                                enim
                                risus, aliquam et iaculis sit amet, gravida eget est. Orci varius natoque penatibus et
                                magnis
                                dis parturient
                                montes, nascetur ridiculus mus. Nulla ultricies interdum lobortis. Praesent tincidunt dolor
                                eu
                                commodo dapibus. Donec sit amet feugiat diam.
                                magnis
                                dis parturient
                                montes, nascetur ridiculus mus. Nulla ultricies interdum lobortis. Praesent tincidunt dolor
                                eu
                                commodo dapibus. Donec sit amet feugiat diam.
                            </p>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet scelerisque arcu. Ut
                                et
                                dictum nulla. Ut at nisl neque. Aenean vehicula feugiat sodales. Cras nulla lacus, ecitur
                                sit
                                amet
                                pellentesque a, mattis at turpis. Fusce viverra elementum tristique. Nulla ultricies, lorem
                                eu
                                iaculis hendrerit, justo turpis posuere est, vel ullamcorper orci justo ac leo. Praesent
                                enim
                                risus, aliquam et iaculis sit amet, gravida eget est. Orci varius natoque penatibus et
                                magnis
                                dis parturient magnis
                                dis parturient
                                montes, nascetur ridiculus mus. Nulla ultricies interdum lobortis. Praesent tincidunt dolor
                                eu
                                commodo dapibus. Donec sit amet feugiat diam.
                                montes, nascetur ridiculus mus. Nulla ultricies interdum lobortis. Praesent tincidunt dolor
                                eu
                                commodo dapibus. Donec sit amet feugiat diam.
                            </p>
                        </div>
                    </div>

                </section>
                <!-- about us ends -->
            </div>








        </div>



        <!-- footer starts -->

        <?php include_once("includes/footer.php") ?>

        <!-- footer ends -->




    </main>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>

<?php
ob_end_flush();
?>