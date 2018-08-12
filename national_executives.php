<!DOCTYPE html>
<html>
<head>
	<?php include_once 'includes/head_items.php';?>
	<title>Executives</title>
</head>
<body>
	<script type="text/javascript">
		//Initialise AOS
        AOS.init(); 
	</script>

	<!--Navigation Bar-->
	<?php include_once 'includes/navbar.php';?>

	<!--Executives-->
	<div id="executives_body" class="container mb-3">
		<h1 class="text-nugs-1">National Executives</h1>
		<hr/>
		<div class="row">
			<!--List of executives-->
			<div id="executivesSidebar" class="col-md-9 text-center border-right">
				
				<!--President-->
				<div class="d-flex justify-content-center">
					<div class="mb-3" style="width: 30%">
						<img class="img-fluid rounded-circle mx-auto" src="images/homepage/president.jpg" alt="Note By">
						<h3>President</h3>
					</div>
					<!-- <img class="img-fluid rounded-circle mx-auto" src="images/homepage/president.jpg" alt="Note By"> -->
				</div>

				<!--The rest of the executives-->
				<div class="row">
					<div class="col-md-6 d-flex justify-content-center">
						<div style="width: 60%">
							<img class="img-fluid rounded-circle mx-auto" src="images/homepage/president.jpg" alt="Note By">
							<h3>President</h3>
						</div> 
					</div>

					<div class="col-md-6 d-flex justify-content-center">
						<div style="width: 60%">
							<img class="img-fluid rounded-circle mx-auto" src="images/homepage/president.jpg" alt="Note By">
							<h3>President</h3>
						</div> 
					</div>
				</div>

			</div>

			<!--Past Executives-->
			<div id="executivesSidebar" class="col-md-3">
				<h3 class="text-nugs-1">Past Executives</h3>

			</div>
		</div>
		
	</div>

	<!--Footer-->
	<?php include_once 'includes/footer.php';?>

	<script type="text/javascript">
		$(function(){
			$('#executivesLink').addClass('activeTab');
		});
	</script>

</body>
</html>