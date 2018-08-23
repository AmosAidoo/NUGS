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

        <?php
            require_once "config.php";
            require_once 'includes/classes/Retrieve.php';
            $retrieve = new Retrieve();
            $fields = $retrieve->fields();
        ?>
        <div class="container-fluid pt-3">

            <?php
                if(isset($_REQUEST['field_updated'])) {
                    if($_REQUEST['field_updated'] == "true") {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                              Field has been updated
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>';
                        $_REQUEST['field_updated'] == "";
                    }
                }
            ?>
            <h1 class="mb-5">Welcome Page</h1>
            <?php foreach($fields as $field) : ?>
                <form method="POST" action="auths/update_field.php?id=<?php echo $field['id']?>" class="mb-3">
                    <h5 class="text-info"><?php echo $field['field_name'];?></h5>
                    <textarea name="fld_ctnt" class="field_content"><?php echo $field['field_content'];?></textarea>
                    <button type="submit" name="submit" class="btn btn-success mt-2">
                        <i class="fas fa-save"></i> Update</button>
                </form>
            <?php endforeach;?>
        </div>
    </div>

    <script>
        $("#welcomeLink").addClass("active_left_link");
        $(function() {
            $('.field_content').froalaEditor({
                height:200
            });
        });
    </script>
</body>
</html>
