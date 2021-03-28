<?php
ob_start();
include('../includes/db_connection.php');
session_start();

if (empty($_COOKIE['ad_remember_me'])) {

	if (empty($_SESSION['ad_user_id'])) {

		header('location:login.php');
	}
}

// if(!in_array(4,$_SESSION["moderator_access_arr"])){
// 	header('location:index.php');
// }
if (isset($_POST['submit'])) {
	$username = strtolower(trim($_POST['username']));
	$email = strtolower(trim($_POST['email']));
	$password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);

	$profile_picture = "user_placeholder.jpg";

	$role = "moderator";

	$stmt = $conn->prepare("INSERT INTO `users`( `username`,`email`,`password`,`profile_picture`,`role`,`created_at`) VALUES (:username,:email,:password,:profile_picture,:role,CURRENT_TIMESTAMP)");

	$stmt->bindParam(':username', $username);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':password', $password);
	$stmt->bindParam(':profile_picture', $profile_picture);
	$stmt->bindParam(':role', $role);

	$err = false;

	if ($stmt->execute()) {


		$err = '
        
		<div class="alert alert-success alert-dismissible" role="alert">
		<strong>Congrats!</strong> Successfully Deleted
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>

';
	} else {
		$err = '
        
		<div class="alert alert-success alert-dismissible" role="alert">
		<strong>Congrats!</strong> Successfully Deleted
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>

';
	}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<?php include_once("includes/head.php"); ?>

	<title>Add Moderators</title>
</head>

<body class="page-body">

	<div class="page-container">
		<!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

		<!-- leftbar starts -->

		<?php include_once("includes/left-bar.php"); ?>

		<!-- leftbar ends -->

		<div class="main-content">

			<div class="row">

				<!-- header starts-->
				<?php include_once("includes/header.php"); ?>
				<!-- header ends -->

			</div>

			<hr />

			<ol class="breadcrumb bc-3">
				<li>
					<a href="index.php"><i class="fa-home"></i>Home</a>
				</li>
				<li>

					<a href="#">Moderators</a>
				</li>
				<li class="active">

					<strong>Add Moderator</strong>
				</li>
			</ol>

			<h2>Add Moderator</h2>
			<br />


			<div class="row">
				<div class="col-md-12">

					<div id="notification-div">
						<?php if (isset($err) && $err != "") {
							echo $err;
						} ?>
					</div>

					<div class="panel panel-primary" data-collapsed="0">

						<div class="panel-heading">
							<div class="panel-title">
								Add Moderator Info
							</div>

							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
								<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>

							</div>
						</div>

						<div class="panel-body">


							<form id="form" method="POST" class="form-horizontal form-groups-bordered">

								<div class="form-group">
									<label for="field-1" class="col-sm-3 control-label">Moderator Username</label>

									<div class="col-sm-5">
										<input type="text" name="username" class="form-control" id="field-2" placeholder="Moderator Username">
									</div>
								</div>

								<div class="form-group">
									<label for="field-1" class="col-sm-3 control-label">Moderator Email</label>

									<div class="col-sm-5">
										<input required="" type="email" name="email" class="form-control" id="field-1" placeholder="Email">
									</div>
								</div>


								<div class="form-group">
									<label for="field-3" class="col-sm-3 control-label">Moderator Password</label>

									<div class="col-sm-5">
										<input required="" type="password" name="password" class="form-control" id="password" placeholder="Password">
									</div>
									<div id="passwordError"></div>
								</div>

								<div class="form-group">
									<label for="field-3" class="col-sm-3 control-label">Confirm Password</label>

									<div class="col-sm-5">
										<input required="" type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Password">
									</div>
									<div id="cpasswordError"></div>
								</div>






								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-5">
										<button type="submit" name="submit" class="btn btn-default">Add Moderator</button>
									</div>
								</div>
							</form>

						</div>

					</div>

				</div>
			</div>





			<!-- Footer starts -->
			<?php include_once("includes/footer.php"); ?>
			<!-- Footer end -->

		</div>




	</div>




	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/bootstrap-switch.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

	<script src="assets/js/jquery.validate.min.js"></script>

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
						url: "../includes/ajax_function.php",
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
						url: "../includes/ajax_function.php",
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
						url: "../includes/ajax_function.php",
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

				error.insertAfter(element);

			},

			errorElement: "div"
		})
	</script>

</body>

</html>