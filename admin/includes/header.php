<div class="col-md-6 col-sm-8 clearfix">

	<?php
	$user_id = $_SESSION["ad_user_id"];

	$query = $conn->prepare("SELECT * FROM users where id='$user_id'");
	$query->execute();
	$result = $query->fetch(PDO::FETCH_ASSOC);

	?>

	<ul class="user-info pull-left pull-none-xsm">

		<!-- Profile Info -->
		<li class="profile-info dropdown">
			<!-- add class "pull-right" if you want to place this from right -->

			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<img src="<?php echo "../images/user_images/" . $_SESSION["ad_profile_picture"]; ?>" alt="" class="img-circle" width="44" />
				<?php echo ucwords($_SESSION["ad_username"]); ?>
			</a>

			<ul class="dropdown-menu">

				<!-- Reverse Caret -->
				<li class="caret"></li>

				<!-- Profile sub-links -->
				<li>
					<a href="extra-timeline.html">
						<i class="entypo-user"></i>
						Edit Profile
					</a>
				</li>

				


			</ul>
		</li>

	</ul>



</div>


<!-- Raw Links -->
<div class="col-md-6 col-sm-4 clearfix hidden-xs">

	<ul class="list-inline links-list pull-right">


		<!-- <li class="dropdown language-selector">
		
						Language: &nbsp;
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
							<img src="assets/images/flags/flag-uk.png" width="16" height="16" />
						</a>
		
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-de.png" width="16" height="16" />
									<span>Deutsch</span>
								</a>
							</li>
							<li class="active">
								<a href="#">
									<img src="assets/images/flags/flag-uk.png" width="16" height="16" />
									<span>English</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-fr.png" width="16" height="16" />
									<span>François</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-al.png" width="16" height="16" />
									<span>Shqip</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-es.png" width="16" height="16" />
									<span>Español</span>
								</a>
							</li>
						</ul>
		
					</li>
		
					<li class="sep"></li>
		
					
					<li>
						<a href="#" data-toggle="chat" data-collapse-sidebar="1">
							<i class="entypo-chat"></i>
							Chat
		
							<span class="badge badge-success chat-notifications-badge is-hidden">0</span>
						</a>
					</li> -->

		<li class="sep"></li>

		<li>
			<a href="logout.php">
				Log Out <i class="entypo-logout right"></i>
			</a>
		</li>
	</ul>

</div>