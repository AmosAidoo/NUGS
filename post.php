<?php session_start();?>
<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<?php include_once 'includes/head_items.php';?>
	<title><?php ?></title>
</head>
<body>
	<script type="text/javascript">
		//Initialise AOS
        AOS.init(); 
	</script>
	<!--Navigation Bar-->
	<?php include_once 'includes/navbar.php';?>

	<!--Main Body Start-->
	<?php
		require_once 'nugs-administrator/config.php';
		require_once 'nugs-administrator/includes/classes/Database.php';


		//Database object
		$database = new Database(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

	    //Connection object
	    $conn = $database->connect();

	    $id = $conn->real_escape_string($_GET['id']);

	    $sql = "SELECT *
	    		FROM blog_pages
	    		WHERE id = " . $id;
	    		
	    $result = $conn->query($sql);

	    $posts = $result->fetch_assoc();

	    $conn->close();
	?>
	<div id="mainBody" class="container">
		<a href="blog.php"><i class="fas fa-arrow-left"></i> Back to posts</a>
		<h1 class="text-nugs-1"><?php echo $posts['page_title']; ?></h1>
		<hr>
		<div class="row">
			<div class="col-md-9">

				<!--The Post-->
				<div class="row border-right">
					<div class="container-fluid">
						<img class="img-fluid" src="<?php echo $posts['page_image']; ?>" alt="Post Image" />
						
						<h1><?php echo $posts['page_title']; ?></h1>
						<p class="text-muted"><?php echo $posts['time']; ?> | <?php echo $posts['author']; ?></p>
						<p class="lead">
							<?php echo $posts['page_content']; ?>
						</p>	
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