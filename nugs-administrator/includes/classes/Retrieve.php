<?php

/**
 * Created by PhpStorm.
 * User: Amos Aidoo
 * Date: 11/08/2018
 * Time: 2:22 PM
 */
require_once "Database.php";

class Retrieve {

    private $connection;

    public function __construct() {
        $database = new Database(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
        $this->connection = $database->connect();
    }

    public function users(){
        $row = array("username"=>"","email"=>"",""=>"");
        $sql = "SELECT username,email,date_joined
                FROM users";
        $result = $this->connection->query($sql);

        if($result->num_rows >= 1){

            while ($row = $result->fetch_assoc()){
                echo "<tr>
                        <td>" . $row['username'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['date_joined'] . "</td> 
                      </tr>";
            }
        } else
            return;
    }

    public function usersCount() : int {
        $row = array("username"=>"","email"=>"",""=>"");
        $sql = "SELECT username,email,date_joined
                FROM users";
        $result = $this->connection->query($sql);

        if($result->num_rows >= 1){
            return $result->num_rows;
        }

        return 0;
    }

    public function pagesCount() : int {

    }

    public function postsCount() : int {

    }

}
?>