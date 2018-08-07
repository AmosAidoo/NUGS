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
	<div id="executives_body" class="container">
		<h1 class="text-nugs-1">Executives</h1>
		<hr>
		<div class="row">
			<div class="col-md-9">


				<!--Executive Cards-->
				<div class="row">
					<div class="col-md-6">
						<div class="card mb-3">
							<img class="card-img-top img-fluid" src="images/homepage/carousel/nugs 1.jpg" alt="Portfolio">
							<div class="card-footer">
								<h5>Portfolio</h5>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card mb-3">
							<img class="card-img-top img-fluid" src="images/homepage/carousel/nugs 1.jpg" alt="Portfolio">
							<div class="card-footer">
								<h5>Portfolio</h5>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card mb-3">
							<img class="card-img-top img-fluid" src="images/homepage/carousel/nugs 1.jpg" alt="Portfolio">
							<div class="card-footer">
								<h5>Portfolio</h5>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card mb-3">
							<img class="card-img-top img-fluid" src="images/homepage/carousel/nugs 1.jpg" alt="Portfolio">
							<div class="card-footer">
								<h5>Portfolio</h5>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card mb-3">
							<img class="card-img-top img-fluid" src="images/homepage/carousel/nugs 1.jpg" alt="Portfolio">
							<div class="card-footer">
								<h5>Portfolio</h5>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card mb-3">
							<img class="card-img-top img-fluid" src="images/homepage/carousel/nugs 1.jpg" alt="Portfolio">
							<div class="card-footer">
								<h5>Portfolio</h5>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card mb-3">
							<img class="card-img-top img-fluid" src="images/homepage/carousel/nugs 1.jpg" alt="Portfolio">
							<div class="card-footer">
								<h5>Portfolio</h5>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card mb-3">
							<img class="card-img-top img-fluid" src="images/homepage/carousel/nugs 1.jpg" alt="Portfolio">
							<div class="card-footer">
								<h5>Portfolio</h5>
							</div>
						</div>
					</div>
				</div>
				
			</div>

			<!--Sidebar-->
			<div id="executivesSidebar" class="col-md-3">
				<?php include_once 'includes/sidebar.php';?>

			</div>
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