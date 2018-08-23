<?php
    session_start();
?>
<!doctype html>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once 'includes/head_items.php';?>
    <link rel="stylesheet" href="resources/fancybox/dist/jquery.fancybox.min.css" />
    <script src="resources/fancybox/dist/jquery.fancybox.min.js"></script>

    <title>Edit</title>
</head>
<body>
    <?php
    if(!isset($_SESSION['uname']))
        header("Location:login.php");
    ?>

    <?php
        require_once 'config.php';
        require_once 'includes/classes/Database.php';

        //Database Object
        $database = new Database(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

        //Connection object
        $conn = $database->connect();

        $sql = "SELECT *
                FROM blog_pages
                WHERE id = " . $_GET['id'];

        $result = $conn->query($sql);

        $row = $result->fetch_assoc();
    ?>

    <!--Sidebar-->
    <?php include_once 'includes/fixed_left_sidebar.php';?>

    <div class="main_page">
        <div class="container-fluid">
            <h1><i class="fas fa-edit"></i> Edit Post</h1>
            <form method="POST" action="auths/update_post.php?id=<?php echo $row['id']?>">
                <div class="form-group md-3">
                    Post Title
                    <input name="post_title" type="text" class="form-control" value="<?php echo $row['page_title']?>">
                </div>

                <div class="form-group mb-3">
                    Author
                    <input name="post_author" type="text" class="form-control" value="<?php echo $row['author']?>" readonly>
                </div>

                <!--Image-->
                <div class="input-group mb-3">
                    <input id="post_img" name="post_image" value="<?php echo $row['page_image']?>"
                           type="text" class="form-control" required placeholder="Select Image">
                    <div class="input-group-append">
                        <a id="fancyEdit" href="resources/responsive_filemanager/filemanager/dialog.php?type=1&field_id=post_img&relative_url=1"
                           class="btn bg-info text-white">Select Image</a>
                    </div>
                </div>

                <div class="form-group mb-3">
                    Post
                    <textarea  name="post_body"><?php echo $row['page_content']?></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-success mb-3">Update Post</button>
            </form>
        </div>
    </div>



    <!-- Initialize the editor. -->
    <script>
        $(function() {
            $('textarea').froalaEditor({
                height:300,
                imageUploadURL: '/Projects/NUGS UKRAINE/nugs-administrator/upload_image.php'
            });

            $('#fancyEdit').fancybox({
                'width'		: 900,
                'height'	: 600,
                'type'		: 'iframe',
                'autoScale'    	: false
            });
        });
    </script>
</body>
</html>
