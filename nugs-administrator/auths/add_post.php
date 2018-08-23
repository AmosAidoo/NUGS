<?php
/**
 * Created by PhpStorm.
 * User: Amos Aidoo
 * Date: 14/08/2018
 * Time: 2:02 PM
 */
session_start();
require_once '../config.php';
require_once '../includes/classes/Database.php';

//Database Object
$database = new Database(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//Connection object
$conn = $database->connect();

if(isset($_POST['submit'])) {
    $target = "nugs-administrator/images/uploads/";
    $post_title = $_POST['post_title'];
    $post_author = $_POST['post_author'];
    $post_image = $_POST['post_image'];
    $uploadPath = $target . $post_image;
    $post = $_POST['post_body'];

    if(empty($post_author))
        $post_author = "Anonymous";

    //Load information to database
    $sql = "INSERT INTO blog_pages(page_title, page_image, author, page_content, time) 
            VALUES ('$post_title','$uploadPath','$post_author','$post' , CURRENT_DATE)";

    $query = $conn->query($sql);

    if($query){
        header("Location:../blog.php?uploaded=true");
    }

}


?>