<!DOCTYPE html>
<html>
<head>
	<?php include_once 'includes/head_items.php';?>
	<title>Gallery</title>
</head>
<body>
	<script type="text/javascript">
		//Initialise AOS
        AOS.init(); 
	</script>

	<!--Navigation Bar-->
	<?php include_once 'includes/navbar.php';?>

	<!--Footer-->
	<?php include_once 'includes/footer.php';?>

	<script type="text/javascript">
		$(function(){
			$('#galleryLink').addClass('activeTab');
		});
	</script>

</body>
</html>