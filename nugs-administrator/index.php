<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once 'includes/head_items.php';?>
	<title>Admin Panel</title>
</head>
<body>

	<?php
		if (isset($_SESSION['uname'])) {
			header("Location:dashboard.php");
		} else {
			header("Location:login.php");
		}
	?>

</body>
</html>