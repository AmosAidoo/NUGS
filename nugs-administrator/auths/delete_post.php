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
    $sql = "DELETE FROM blog_pages
        WHERE id = " . $_GET['id'];

    $query = $conn->query($sql);

    if ($query) {
        header("Location:../blog.php?deleted=true");
    }
}
?>