<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once 'includes/head_items.php';?>
	<title>Dashboard</title>
</head>
<body>
    <?php
        if(!isset($_SESSION['uname']))
            header("Location:login.php");
    ?>

    <!--Sidebar-->
    <?php include_once 'includes/fixed_left_sidebar.php';?>

    <!--Dashboard's Main Body-->
    <?php
        require_once "config.php";
        require_once 'includes/classes/Retrieve.php';
        $retrieve = new Retrieve();
    ?>
    <div id="dashboard_main" class="main_page pt-3">
        <div class="container-fluid">
            <h1><i class="fas fa-cog"></i> Welcome to your dashboard</h1>

            <div class="card">
                <div class="card-header bg-warning">
                    <h3 class="card-title text-white">Page Overview</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="card bg-light text-center">
                                <div class="card-body">
                                    <h3><i class="fas fa-newspaper"></i> 0</h3>
                                    <h3>PAGES</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card bg-light text-center">
                                <div class="card-body">
                                    <h3><i class="fas fa-user"></i>
                                        <?php echo $retrieve->usersCount() ?>
                                    </h3>
                                    <h3>USERS</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card bg-light text-center">
                                <div class="card-body">
                                    <h3><i class="fas fa-edit"></i>
                                        <?php echo $retrieve->postsCount() ?>
                                    </h3>
                                    <h3>POSTS</h3>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#dashboardLink").addClass("active_left_link");
    </script>



</body>
</html>