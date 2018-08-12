<?php
/**
 * Created by PhpStorm.
 * User: Amos Aidoo
 * Date: 11/08/2018
 * Time: 4:24 PM
 */
    session_start();
    require_once '../config.php';
    require_once '../includes/classes/Database.php';

    //Database Object
    $database = new Database(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

    //Connection object
    $conn = $database->connect();
    if(isset($_POST['submit'])) {
        $username = $conn->real_escape_string($_POST['username']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);

        //Check if user exists
        $usrQuery = "SELECT username
                     FROM users
                     WHERE username = '$username'";
        $usrResult = $conn->query($usrQuery);


        if($usrResult->num_rows > 0){
            header("Location:../users.php?register=userExists");
        } else {
            $hashed = password_hash('$password', PASSWORD_DEFAULT);

            $sql = "INSERT INTO `users` (`id`, `username`, `email`, `password`) 
                VALUES (NULL, '$username', '$email', '$hashed')";

            $query = $conn->query($sql);

            if ($query) {
                header("Location:../users.php?added=true");

            } else {
                header("Location:../users.php?added=false");
            }
        }
    } else {
        header("Location:../users.php?register=error");
    }


?>