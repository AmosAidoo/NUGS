<?php
/**
 * Created by PhpStorm.
 * User: Amos Aidoo
 * Date: 13/08/2018
 * Time: 2:43 PM
 */
    session_start();
    require_once '../config.php';
    require_once '../includes/classes/Database.php';

    //Database Object
    $database = new Database(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

    //Connection object
    $conn = $database->connect();

    $id = $_REQUEST['id'];

    if(isset($_POST['submit'])){
        $target = "nugs-administrator/images/uploads/";
        $post_title = $_POST['post_title'];
        $post = $_POST['post_body'];
        $post_img = $_POST['post_image'];

        $getImage = "SELECT page_image
                     FROM blog_pages
                     WHERE id = " . $id;

        $img_result = $conn->query($getImage);

        if($img_result){
            $row = $img_result->fetch_assoc();
        }

        if(strpos($post_img,$target) == 0){
            $post_img = $row['page_image'];
        } else {
            $post_img = $target . $post_img;
        }

        $sql = "UPDATE blog_pages
                SET page_title='$post_title',page_content='$post',page_image='$post_img'
                WHERE `blog_pages`.`id` = " . $id;
        $query = $conn->query($sql);

        if($query){
            header("Location:../blog.php?updated=true");
        }
    }

?>