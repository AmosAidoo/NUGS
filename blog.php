<!DOCTYPE html>
<html>
<head>
	<?php include_once 'includes/head_items.php';?>
	<title>Blog</title>
</head>
<body>
	<script type="text/javascript">
		//Initialise AOS
        AOS.init(); 
	</script>
	<!--Navigation Bar-->
	<?php include_once 'includes/navbar.php';?>

	<!--Main Body Start-->
	<div id="mainBody" class="container">
		<h1 class="text-nugs-1">Blog</h1>
		<hr>
		<div class="row">
			<div class="col-md-9">
				

				<!--POSTS-->
				<div class="row border-right">
					<div class="card-columns">
						<div class="container-fluid">
							<div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" class="card mb-3 shadow-sm">
								<img class="card-img-top" src="images/homepage/carousel/nugs 1.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="text-muted"><?php echo date("D-m-Y")?> | Author</p>
									<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								</div>

								<div class="card-footer">
									<a href="#" class="btn btn-danger">Read More</a>
								</div>
							</div>
						
							<div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" class="card mb-3 shadow-sm">
								<img class="card-img-top" src="images/homepage/carousel/nugs 2.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="text-muted"><?php echo date("D-m-Y")?> | Author</p>
									<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								</div>

								<div class="card-footer">
									<a href="#" class="btn btn-danger">Read More</a>
								</div>
							</div>

							<div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="card mb-3 shadow-sm">
								<img class="card-img-top" src="images/homepage/carousel/nugs 3.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="text-muted"><?php echo date("D-m-Y")?> | Author</p>
									<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								</div>

								<div class="card-footer">
									<a href="#" class="btn btn-danger">Read More</a>
								</div>
							</div>

							<div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" class="card mb-3 shadow-sm">
								<img class="card-img-top" src="images/homepage/carousel/nugs 4.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="text-muted"><?php echo date("D-m-Y")?> | Author</p>
									<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								</div>

								<div class="card-footer">
									<a href="#" class="btn btn-danger">Read More</a>
								</div>
							</div>

							<div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" class="card mb-3 shadow-sm">
								<img class="card-img-top" src="images/homepage/carousel/nugs 5.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="text-muted"><?php echo date("D-m-Y")?> | Author</p>
									<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								</div>

								<div class="card-footer">
									<a href="#" class="btn btn-danger">Read More</a>
								</div>
							</div>

							<div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="card mb-3 shadow-sm">
								<img class="card-img-top" src="images/homepage/carousel/nugs 1.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="text-muted"><?php echo date("D-m-Y")?> | Author</p>
									<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								</div>

								<div class="card-footer">
									<a href="#" class="btn btn-danger">Read More</a>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>

			<!--Sidebar-->
			<div id="blogSidebar" class="col-md-3">
				<?php include_once 'includes/sidebar.php';?>

			</div>
		</div>
	</div>
	<!--Main Body End-->

	<!--Paginatiojn-->
	<div class="container-fluid mt-3">
		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-center">
				<li class="page-item">
				<a class="page-link" href="#" tabindex="-1">Previous</a>
				</li>

				<li class="page-item active"><a class="page-link" href="#">1</a></li>

				<li class="page-item"><a class="page-link" href="#">2</a></li>

				<li class="page-item"><a class="page-link" href="#">3</a></li>

				<li class="page-item">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</nav>
	</div>

	<!--Footer-->
	<?php include_once 'includes/footer.php';?>

	<script type="text/javascript">
		$(function(){
			$('#blogLink').addClass('activeTab');
		});
	</script>
</body>
</html>