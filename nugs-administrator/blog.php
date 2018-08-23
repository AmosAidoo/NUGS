<?php session_start() ?>
<!doctype html>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once 'includes/head_items.php';?>
    <title>Blog</title>
</head>
<body>
    <?php
    if(!isset($_SESSION['uname']))
        header("Location:login.php");
    ?>

    <!--Sidebar-->
    <?php include_once 'includes/fixed_left_sidebar.php';?>

    <!--Main Page-->
    <div class="main_page">
        <div class="container-fluid pt-3">

            <?php
            if(isset($_REQUEST['uploaded'])) {
                if($_REQUEST['uploaded'] == "true") {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                          Post has been uploaded
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>';
                    $_REQUEST['uploaded'] == "";
                }
            }

            if(isset($_REQUEST['updated'])) {
                if($_REQUEST['updated'] == "true") {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                          Post has been updated
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>';
                    $_REQUEST['updated'] == "";
                }
            }

            if(isset($_REQUEST['deleted'])) {
                if($_REQUEST['deleted'] == "true") {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                          Post has been deleted
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>';
                    $_REQUEST['deleted'] == "";
                }
            }
            ?>
            <h1 class="display-3">Blog</h1>

            <a class="btn bg-primary text-white" href="new_post.php"><i class="fas fa-plus"></i> Create Post</a>

            <h3 class="mt-2">Posts</h3>
            <table class="table table-hover">
                <tr>
                    <th>Title</th>
                    <th>Date Published</th>
                    <th>Actions</th>
                </tr>
                <?php
                require_once "config.php";
                require_once 'includes/classes/Retrieve.php';
                $retrieve = new Retrieve();
                $rows = $retrieve->postTitles();
                ?>

                <?php foreach ($rows as $row) :?>
                <tr>
                    <td> <p class='lead'><?php echo $row['page_title']?> </p></td>
                    <td> <p class='lead'><?php echo $row['time']?> </p></td>
                    <td>
                        <a href='blog_edit.php?id=<?php echo $row['id']?>' class='btn btn-warning'><i class='fas fa-edit'></i> Edit</a>
                        <button class='btn btn-danger' data-target="#delete_caution"
                        data-toggle="modal"><i class='fas fa-trash'></i> Delete</button>
                        <a class="btn bg-primary text-white" target="_blank" href="../post.php?id=<?php echo $row['id']; ?>">
                        <i class='fas fa-search'></i> View Page</a>
                    </td>
                </tr>

                <!--Detete Caution-->
                <div class="modal fade" id="delete_caution" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-warning" id="exampleModalCenterTitle">Warning!!!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="lead">Are you sure you want to delete post</p>
                            </div>
                            <div class="modal-footer">
                                <form method="POST" action="auths/delete_post.php?id=<?php echo $row['id']?>">
                                    <button type="submit" name="submit" class="btn btn-danger">Yes</button>
                                </form>
                                <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </table>
        </div>
    </div>

    <script>
        $("#blogLink").addClass("active_left_link");
    </script>
</body>
</html>
