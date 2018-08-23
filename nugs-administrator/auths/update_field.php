<?php
/**
 * Created by PhpStorm.
 * User: Amos Aidoo
 * Date: 23/08/2018
 * Time: 4:43 PM
 */
session_start();
require_once '../config.php';
require_once '../includes/classes/Database.php';

//Database Object
$database = new Database(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//Connection object
$conn = $database->connect();

$id = $_REQUEST['id'];

if(isset($_POST['submit'])) {
    $fld_ctnt = $_POST['fld_ctnt'];
    $sql = "UPDATE fields
            SET field_content='$fld_ctnt'
            WHERE `fields`.`id` = " . $id;
    $query = $conn->query($sql);

    if($query){
        header("Location:../welcome.php?field_updated=true");
    }
}
?>