<?php

// $user_type_arr = $_SESSION["user_access_arr"];


?>


<div class="sidebar-menu">

	<div class="sidebar-menu-inner">

		<header class="logo-env">

			<!-- logo -->
			<div class="logo">
				<a href="index.php">
					<img src="assets/images/logo@2x.png" width="120" alt="" />
				</a>
			</div>

			<!-- logo collapse icon -->
			<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon">
					<!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>


			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation">
					<!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>

		</header>



		<ul id="main-menu" class="main-menu">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
			<li class="active active">
				<a href="index.php">
					<i class="entypo-gauge"></i>
					<span class="title">Dashboard</span>
				</a>

			</li>



			<li >
				<a href="all_users.php">
					<i class="entypo-layout"></i>
					<span class="title">Users</span>
				</a>
				
			</li>


			<li class="">
				<a href="all_messages.php">
					<i class="entypo-gauge"></i>
					<span class="title">Messages</span>
				</a>

			</li>



			<li class="has-sub">
				<a href="#">
					<i class="entypo-layout"></i>
					<span class="title">Moderators</span>
				</a>
				<ul>
					<li>
						<a href="add_moderators.php">
							<span class="title">Add Moderators</span>
						</a>
					</li>

					<li>
						<a href="all_moderators.php">
							<span class="title">All Moderators</span>
						</a>
					</li>

				</ul>
			</li>












		</ul>

	</div>

</div>