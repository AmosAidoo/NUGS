<?php session_start(); ?>
<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once 'includes/head_items.php';?>
    <title>Users</title>
</head>
<body>
    <?php
    if(!isset($_SESSION['uname']))
        header("Location:login.php");
    ?>

    <!--Sidebar-->
    <?php include_once 'includes/fixed_left_sidebar.php';?>

    <!--Main Page-->
    <div id="users_main" class="main_page">
        <div class="container-fluid pt-5">

            <!--Alerts-->
            <?php
            if(isset($_REQUEST['added'])) {
                if($_REQUEST['added'] == "true") {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      User Added
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>';
                    $_REQUEST['added'] == "";
                } else {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      User could not be added
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>';
                    $_REQUEST['added'] == "";
                }
            }

            if(isset($_REQUEST['register'])) {
                if($_REQUEST['register'] == "userExists") {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                          User already exists
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>';
                    $_REQUEST['register'] == "";
                }

            }
            ?>

            <div class="row">
               <div class="col-10">
                   <h3 class="d-inline">Users</h3>
               </div>

                <div class="col-2">
                    <button class="btn rounded border p-2 bg-warning text-white" data-toggle="modal" data-target="#addUser"><i class="fas fa-plus"></i> Add New User</button>
                </div>
            </div>



            <table class="table mt-5">
                <tr>
                    <th>User</th>
                    <th>Email</th>
                    <th>Date registered</th>
                </tr>

               <?php
                    require_once "config.php";
                    require_once 'includes/classes/Retrieve.php';
                    $retrieve = new Retrieve();
                    $user = $retrieve->users();
               ?>

            </table>
        </div>
    </div>

    <!-- Add a new user -->
    <div id="addUser" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New User</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body text-center">
                    <form method="POST" action="auths/register.php">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input name="username" class="form-control" type="text" placeholder="Username" required>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input name="email" class="form-control" type="email" placeholder="Email" required>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input name="password" class="form-control" type="password" placeholder="Password" required>
                        </div>

                        <button type="reset" class="btn btn-info">Reset Form</button>
                        <button name="submit" type="submit" class="btn btn-info">Add User</button>
                    </form>
                </div>

            </div>

        </div>
    </div>


    <script>
        $("#usersPage").addClass("active_left_link");
    </script>
</body>
</html>