<?php session_start() ?>
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
    <title>New Post</title>
</head>
<body>
<?php
if(!isset($_SESSION['uname']))
    header("Location:login.php");
?>

<!--Sidebar-->
<?php include_once 'includes/fixed_left_sidebar.php';?>

<div class="main_page">
    <div class="container-fluid">
        <h1><i class="fas fa-edit"></i> New Post</h1>
        <form method="POST" action="auths/add_post.php" enctype="multipart/form-data">
            <div class="form-group md-3">
                Post Title
                <input name="post_title" type="text" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                Author
                <input name="post_author" type="text" class="form-control">
            </div>

            <!--Image-->
            <div class="input-group mb-3">
                <input id="post_img" name="post_image" type="text" class="form-control" required placeholder="Select Image">
                <div class="input-group-append">
                    <a id="fancy" href="resources/responsive_filemanager/filemanager/dialog.php?type=1&field_id=post_img&relative_url=1"
                       class="btn bg-info text-white">Select Image</a>
                </div>
            </div>

            <div id="error_img"></div>

            <div class="form-group mb-3" required>
                Post
                <textarea name="post_body"></textarea>
            </div>

            <button type="submit" name="submit" class="btn btn-success mb-3">Add Post</button>
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

        $('#fancy').fancybox({
            'width'		: 900,
            'height'	: 600,
            'type'		: 'iframe',
            'autoScale'    	: false
        });
    });

    /*function responsive_filemanager_callback(field_id){
        console.log(field_id);
        var url=jQuery('#'+field_id).val();
        alert('update '+field_id+" with "+url);
        //your code
    }*/

</script>

</body>
</html>
