<?php
    require_once 'config.php';
	require_once 'includes/classes/Database.php';

	$obj = new Database(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

	$connection = $obj->connect();

	/*$hashed = password_hash('12345678',PASSWORD_DEFAULT);

	$sql = "INSERT INTO `users` (`id`, `username`, `email`, `password`) 
            VALUES (NULL, 'joel', 'joel@email.com', '$hashed')";*/

    $hashed = password_hash('qwerty',PASSWORD_DEFAULT);

    $sql = "INSERT INTO `users` (`id`, `username`, `email`, `password`) 
                VALUES (NULL, 'james23', 'james@email.com', '$hashed')";

	$query = $connection->query($sql);


    if($query){
        echo "User has been added";
    } else {
        echo "User could not be added";
    }
?>