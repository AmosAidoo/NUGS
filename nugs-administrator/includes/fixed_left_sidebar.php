<div id="fixed_left_sidebar" class="bg-warning text-white">
    <?php
        require_once "config.php";
        require_once 'includes/classes/Retrieve.php';
        $retrieve = new Retrieve();
    ?>
    <div class="border-bottom p-2">
        <img src="images/logos/nugs_ukraine_logo.png" class="img-fluid">
        <h4 class="d-inline text-muted">ADMIN PANEL</h4>
        <button type="button" class="close d-inline">&times;</button>
    </div>

    <div class="border-bottom pl-2 pt-1">
        <p class="lead">Hello <span class="text-muted"><?php echo $_SESSION['uname']?></span></p>
    </div>

    <a id="dashboardLink" href="dashboard.php" class="d-block pl-2 pt-3 pb-3 border-bottom side-link"><i class="fas fa-cog"></i> Dashboard</a>

    <div class="border-bottom">
        <a id="pagesLink" class="side-link d-block pl-2 pt-3 pb-3" href="#" data-toggle="collapse" data-target="#page_links">
            <i id="plus" class="fas fa-plus"></i> Pages <span class="badge badge-pill badge-dark mr-auto">0</span>
        </a>

        <a id="pagesLinkMinus" class="d-none side-link pl-2 pt-3 pb-3" href="#" data-toggle="collapse" data-target="#page_links">
            <i id="plus" class="fas fa-minus"></i> Pages <span class="badge badge-pill badge-dark mr-auto">0</span>
        </a>


        <div id="page_links" class="list-unstyled collapse">
            <a id="welcomeLink" href="welcome.php"><i class="fas fa-home"></i> Home</a>
            <a id="blogLink" href="blog.php"><i class="fas fa-newspaper"></i>
                Blog <span class="badge badge-pill badge-dark mr-auto"><?php echo $retrieve->postsCount() ?></span>
            </a>
            <a id="executivesLink" href="executives.php"><i class="fas fa-users"></i> Executives</a>
        </div>
    </div>

    <a id="usersPage" class="d-block side-link pl-2 pt-3 pb-3" href="users.php"><i class="fas fa-user"></i>
        Users <span class="badge badge-pill badge-light mr-auto"><?php echo $retrieve->usersCount() ?></span>
    </a>

    <!--Bottom of side bar-->
    <div id="sidebar_bottom" class="pt-2 pb-2 text-center border-top">
        <form method="POST" action="logout.php">
            <button type="submit" class="btn"><i class="fas fa-sign-out-alt"></i> Logout</button>
        </form>

        <form>
            <button class="btn"><i class="fas fa-search"></i> Goto Site</button>
        </form>
    </div>
</div>

<script>

    $("#pagesLink").click(function () {
        $("#pagesLink").removeClass("d-block");
        $("#pagesLink").addClass("d-none");
        $("#pagesLinkMinus").removeClass("d-none");
        $("#pagesLinkMinus").addClass("d-block");
    });

    $("#pagesLinkMinus").click(function () {
        $("#pagesLinkMinus").removeClass("d-block");
        $("#pagesLinkMinus").addClass("d-none");
        $("#pagesLink").removeClass("d-none");
        $("#pagesLink").addClass("d-block");
    });

</script>