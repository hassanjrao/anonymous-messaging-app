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


            <!-- Add Message Starts -->

            <div class="row">
                <div class="col-lg-12">
                    <h2>Ajouter un message</h2>
                </div>
            </div>

            <div class="msg-post">


                <div class="row justify-content-center mt-5 mb-5">

                    <div class="col-lg-8 post-card pt-4 pb-4">

                        <div class="row">
                            <div class="col-lg-12 post-card-header pb-4">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1">
                                        <img class="user-image" src="https://via.placeholder.com/50" width="50px" height="50px" alt="">

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <h2>User Name</h2>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-12 post-card-body">
                                <textarea class="form-control " rows="7" placeholder="écrire un commentaire.."></textarea>
                            </div>

                            <div class="col-lg-12 text-center mt-4 mb-4">
                                <button class="btn btn-light"><b>nous faire parvenir</b></button>
                            </div>

                        </div>
                       
                    </div>


                </div>

            </div>

            <!-- Add Message Ends -->




            <!-- All Messages Starts -->

            <div class="row">
                <div class="col-lg-12">
                    <h2>voir les messages</h2>
                </div>
            </div>


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
                                                <span class="input-group-text"><button type="submit" name="sa" class="btn"><i class="fas fa-arrow-circle-right"></i></button></span>
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

                        </div>

                        <div class="view-all">
                            <a href="all_posts.php">View All Comments</a>
                        </div>








                    </div>


                </div>

            </div>


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
                                        <div class="input-group mb-3">

                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><button type="submit" name="sa" class="btn"><i class="fas fa-arrow-circle-right"></i></button></span>
                                            </div>
                                        </div>
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
                                        <div class="input-group mb-3">

                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><button type="submit" name="sa" class="btn"><i class="fas fa-arrow-circle-right"></i></button></span>
                                            </div>
                                        </div>
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
                                        <div class="input-group mb-3">

                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><button type="submit" name="sa" class="btn"><i class="fas fa-arrow-circle-right"></i></button></span>
                                            </div>
                                        </div>
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

                    </div>


                </div>

            </div>

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

                    </div>


                </div>

            </div>

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

                    </div>


                </div>

            </div>


            <!-- All Messages Ends -->



        </div>




    </main>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>