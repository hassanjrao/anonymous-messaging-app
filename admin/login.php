<?php
ob_start();
include('../includes/db_connection.php');
session_start();

// if (empty($_COOKIE['remember_me'])) {

// 	if (empty($_SESSION['user_id'])) {

// 		header('location:login.php');
// 	}
// }

// if (empty($_SESSION['user_id'])) {

// 	header('location:login.php');
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include_once("includes/head.php"); ?>

	<title>Login</title>

</head>

<body class="page-body login-page login-form-fall">


	<!-- This is needed when you send requests via Ajax -->
	<!-- <script type="text/javascript">
		var baseurl = '';
	</script> -->

	<div class="login-container">

		<div class="login-header login-caret">

			<div class="login-content">

				<a href="index.html" class="logo">
					<img src="assets/images/logo@2x.png" width="120" alt="" />
				</a>

				<p class="description">Dear user, log in to access the admin area!</p>


			</div>

		</div>


		<div class="login-form">

			<div class="login-content">

				<?php

				if (isset($_POST['submit_login'])) {

					$email = strtolower(trim($_POST['email']));
					$password = trim($_POST['password']);

					// check vendor is exist or not

					$query_user = $conn->prepare("SELECT * FROM users WHERE email = '$email' and role='admin'");
					$query_user->execute();
					$result = $query_user->fetch(PDO::FETCH_ASSOC);

					if ($result) {

						if (password_verify($password, $result["password"])) {
							$_SESSION['ad_user_id'] = $result['id'];
							$_SESSION['ad_username'] = $result['username'];
							$_SESSION['ad_profile_picture'] = $result['profile_picture'];
							$_SESSION['success'] = "Login Successfully";
							if (isset($_POST["remember_me"])) {
								setcookie("ad_remember_me", $result['id'], time() + (86400 * 30), "/"); // 86400 = 1 day
							}



				?>
							<div class="alert alert-success alert-dismissible" role="alert">
								<strong>Congrats!</strong>Login Successful.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>


						<?php
							header("location:index.php");
						} else {
						?>

							<!-- <div class="form-login-error">
							<h3>Invalid login</h3>
							<p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p>
						</div> -->

							<div class="alert alert-dismissible alert-danger" role="alert">
								<strong>Oops!</strong> Invalid email or Password.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>

						<?php
						}
					} else {
						?>

						<div class="alert alert-dismissible alert-danger" role="alert">
							<strong>Oops!</strong> Invalid email or Password.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>

				<?php
					}
				}
				?>

				<form method="post">

					<div class="form-group">

						<div class="input-group">
							<div class="input-group-addon">
								<i class="entypo-user"></i>
							</div>

							<input required="" type="email" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off" />
						</div>

					</div>

					<div class="form-group">

						<div class="input-group">
							<div class="input-group-addon">
								<i class="entypo-key"></i>
							</div>

							<input required="" type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
						</div>

					</div>

					<div class="form-group">
						<button type="submit_login" name="submit_login" class="btn btn-primary btn-block btn-login">
							<i class="entypo-login"></i>
							Login In
						</button>
					</div>


				</form>

				<!-- 			
			<div class="login-bottom-links">
				
				<a href="extra-forgot-password.html" class="link">Forgot your password?</a>
				
				<br />
				
				<a href="#">ToS</a>  - <a href="#">Privacy Policy</a>
				
			</div> -->

			</div>

		</div>

	</div>


	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/neon-login.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>

</html>