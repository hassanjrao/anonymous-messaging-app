<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">


        <a class="navbar-brand " href="index.php">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ">

                <?php
                if (isset($_SESSION["user_id"])) {
                ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                <?php
                }
                ?>

                <li class="nav-item active">
                    <a class="nav-link" href="all_messages.php">Messages</a>
                </li>


            </ul>
            <ul class="navbar-nav ml-auto ">

                <?php
                if (isset($_SESSION["user_id"])) {
                ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="signout.php">Sign Out</a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="signin.php">Sign In</a>
                    </li>


                    <li class="nav-item active">
                        <a class="nav-link" href="signup.php">Sign Up</a>
                    </li>
                <?php
                }
                ?>
            </ul>

        </div>

    </nav>



</header>