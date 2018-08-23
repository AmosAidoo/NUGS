<?php
	require_once 'nugs-administrator/config.php';
	require_once 'nugs-administrator/includes/classes/Database.php';

	//Database object
	$database = new Database(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

    //Connection object
    $conn = $database->connect();

    $sql = "SELECT *
    		FROM blog_pages
    		ORDER BY `id` DESC
    		LIMIT 8";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
    	$posts = $result->fetch_all(MYSQLI_ASSOC);
    }

    $conn->close();
?>

<!--Featured Posts-->
<div class="card mb-5" style="width: 18rem;">
	<div class="card-header bg-danger text-white">
	Featured Posts
	</div>

	<!--Featured Carousel-->
	<div class="card-block mt-0">
		<div class="featured-carousel" data-flickity='{ "autoPlay": true }'>
			<div class="carousel-cell">
				<img class="img-fluid" src="images/homepage/carousel/nugs 1.jpg" alt="Card image cap">
				<div class="card-img-overlay text-center">
					<a href="#"><p class="lead text-white">Llorem ipsum dolor color bacon</p></a>
				</div>
			</div>

			<div class="carousel-cell">
				<img class="img-fluid" src="images/homepage/carousel/nugs 2.jpg" alt="Card image cap">
				<div class="card-img-overlay text-center">
					<a href="#"><p class="lead text-white">Llorem ipsum dolor color bacon</p></a>
				</div>
			</div>

			<div class="carousel-cell">
				<img class="img-fluid" src="images/homepage/carousel/nugs 3.jpg" alt="Card image cap">
				<div class="card-img-overlay text-center">
					<a href="#"><p class="lead text-white">Llorem ipsum dolor color bacon</p></a>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Recent Posts-->
<div class="card mb-5" style="width: 18rem;">
	<div class="card-header bg-danger text-white">
	Recent Posts
	</div>


	<!--The Posts-->
	<div class="card-body pb-4">
		<?php foreach($posts as $post) : ?>
			<div class="row mb-3">
				<div class="col">
					<img class="img-fluid" src="<?php echo $post['page_image']; ?>" alt="Card image cap">
				</div>

				<div class="col">
					<a href="#"><?php echo $post['page_title']; ?></a>
					<p><?php echo $post['time']; ?></p>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>

<!--Social Media-->
<div class="card" style="width: 18rem;">
	<div class="card-header bg-danger text-white">
	Social Media
	</div>

	<div class="card-body">
		<span class="mr-3"><a href="#" style="text-decoration: none;color: blue;"><i class="fab fa-facebook fa-3x"></i></a></span>
		<span class="mr-3"><a href="#" style="text-decoration: none;color: aqua;"><i class="fab fa-twitter fa-3x"></i></a></span>
		<span><a href="#" style="text-decoration: none;color: inherit;"><i class="fab fa-instagram fa-3x"></i></a></span>
	</div>

	<!-- <div class="card-footer">
		<button class="btn">Button</button>
	</div> -->

</div>