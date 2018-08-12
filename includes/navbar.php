<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top p-0 w-100">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">
			<img src="images/logos/nugs_ukraine_logo.png" width="40" height="40" class="d-inline-block align-top" alt="Logo">
			NUGS Ukraine
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse" id="navbarNav">
			
			<ul class="navbar-nav ml-auto">
				<li class="nav-item mr-3">
					<a id="homeLink" href="index.php" class="nav-link">Welcome</a>
				</li>

				<li class="nav-item mr-3">
					<a id="blogLink" href="blog.php" class="nav-link">News and Events</a>
				</li>

				<li class="nav-item mr-3">
					<a id="studyInUkraineLink" href="study_in_ukraine.php" class="nav-link">Study in Ukraine</a>
				</li>

				<li class="nav-item mr-3">
					<a id="onlineLibraryLink" href="online_library.php" class="nav-link">Online Library</a>
				</li>

				<li id="executiveItem" class="nav-item mr-3 dropdown">
					<a id="executivesLink" class="nav-link dropdown-toggle">Executives</a>
					<div id="executivedrop" class="dropdown-menu mt-0">
						<a class="dropdown-item" href="national_executives.php">National Executives</a>
						<a class="dropdown-item" href="#">Local Executives</a>
						<a class="dropdown-item" href="#">Committee</a>
					</div>
				</li>

				<li class="nav-item mr-3">
					<a id="galleryLink" href="gallery.php" class="nav-link">Gallery</a>
				</li>

				<li class="nav-item mr-3 dropdown">
					<a id="othersLink" href="others.php" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="#othersdrop">Others</a>
					<div id="othersdrop" class="dropdown-menu mt-0">
						<a class="dropdown-item" href="#">Constitution</a>
						<a class="dropdown-item" href="#">Passport Renewal</a>
					</div>
				</li>

				<li class="nav-item">
					<a id="contactUsLink" href="contact_us.php" class="nav-link">Contact Us</a>
				</li>
			</ul>
			
		</div>
	</div>
	
</nav>

<script type="text/javascript">
	//Navbar drop
	$("#executivesLink,#executivedrop").hover(function(){
		$("#executivedrop").addClass("d-block");
	},function(){
		$("#executivedrop").removeClass("d-block");
	});
</script>