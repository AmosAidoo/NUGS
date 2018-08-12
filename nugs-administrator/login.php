<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once 'includes/head_items.php';?>
	<link rel="stylesheet" type="text/css" href="styles/login_style.css">
	<title>Login</title>
</head>
<body>

	<div id="form-container" class="container-fluid d-flex justify-content-center p-5">
		<form role="form" method="POST" action="auths/login_check.php">
			<div class="card">

				<div class="card-header">
					<img src="images/logos/nugs_ukraine_logo.png" class="img-fluid">
					<h4 class="d-inline">Admin Panel</h4>
				</div>

				<div class="card-body">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="username" class="form-control" type="text" placeholder="Username">
					</div>

					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-lock"></i></span>
						</div>
						<input name="password" class="form-control" type="password" name="" placeholder="Password">
					</div>

					<button name="submit" type="submit" class="btn btn-default w-100">
						<span><i class="fas fa-log in"></i></span> Login
					</button>

					<a href="forgot_password.php" class="d-flex justify-content-center">Forgot Password ?</a>
                    <?php
                        if (isset($_SESSION['error_msg'])){
                            echo '<div class="text-center text-danger">' . $_SESSION["error_msg"] . '</div>';
                            session_unset();
                        }
                    ?>
				</div>
			</div>

		</form>
	</div>

</body>
</html>