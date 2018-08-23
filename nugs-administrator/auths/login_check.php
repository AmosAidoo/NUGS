<?php
    session_start();

    require_once '../includes/classes/Database.php';
    require_once '../config.php';
	//Database Object
	$database = new Database(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

	//Connection object
	$conn = $database->connect();

	if(isset($_POST['submit'])){
	    $username = $conn->real_escape_string($_POST['username']);
	    $password = $conn->real_escape_string($_POST['password']);

	    if(empty($username) || empty($password)){
            $_SESSION['error_msg'] = "Please input all fields";
	        header("Location:../login.php?login=error");
        } else {
            //Continue if none of the fields are empty
            $sql = "SELECT username,email,password
                    FROM users
                    WHERE username = '$username'";

            $result = $conn->query($sql);

            if($result->num_rows < 1){
                $_SESSION['error_msg'] = "Wrong username or password";
                header("Location:../login.php?login=error");
            } elseif($result->num_rows == 1) {
                //Do this if the user if found
                $data = $result->fetch_assoc();
                $deHashed = password_verify($password,$data['password']);

                if($deHashed == false){
                    $_SESSION['error_msg'] = "Wrong username or password";
                    header("Location:../login.php?login=error");
                } elseif ($deHashed == true){
                    //The user is available, set session variables
                    $_SESSION['uname'] = $data['username'];
                    $_SESSION['e-mail'] = $data['email'];
                    header("Location:../dashboard.php");
                }
            }
        }

    } else {
        header("Location:../login.php?submit=error");
    }
?>