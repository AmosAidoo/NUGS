<?php
/**
 * Created by PhpStorm.
 * User: Amos Aidoo
 * Date: 10/08/2018
 * Time: 3:45 PM
 */

    session_start();
    session_unset();
    session_destroy();

    header("Location:login.php");

?>