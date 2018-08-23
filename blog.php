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
				<?php require_once 'includes/get_post.php' ?>
				<!--POSTS-->
				<?php foreach($posts as $post) : ?>
					<div class="shadow p-2 mb-4">
						<h1 class="text-nugs-1"><?php echo $post['page_title']; ?></h1>
						<p class="text-muted"><?php echo $post['time']; ?> | <?php echo $post['author']; ?></p>
						<div class="row">
							<div class="col-md-7">
								<img class="card-img-top" src="<?php echo $post['page_image']; ?>" alt="Card image cap">
							</div>

							<div class="col-md-5">
								<div class="post-highlight">
									<?php echo substr($post['page_content'], 0, 200) ?>
								</div>

								<a href="post.php?id=<?php echo $post['id']; ?>" 
									class="btn btn-danger" style="position: absolute;bottom: 3%">Read More</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				<script type="text/javascript">
					$(".post-highlight p").addClass("lead");
					$(".post-highlight img").addClass("img-fluid");
					$(".post-highlight table").addClass("table");
				</script>
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