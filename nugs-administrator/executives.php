<?php session_start(); ?>
<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once 'includes/head_items.php';?>
    <title>Executives</title>
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
        <h1>Executives</h1>
    </div>

</div>

<script>
    $("#executivesLink").addClass("active_page_link");
</script>
</body>
</html>