<?php
	require_once 'nugs-administrator/config.php';
	require_once 'nugs-administrator/includes/classes/Database.php';

	//Database object
	$database = new Database(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

    //Connection object
    $conn = $database->connect();

    $sql = "SELECT *
    		FROM blog_pages
    		ORDER BY `id` DESC
    		LIMIT 6";
    $result = $conn->query($sql);

    
    $posts = $result->fetch_all(MYSQLI_ASSOC);
    

    $conn->close();
?>