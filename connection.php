<?php
    $servername= "localhost";
    $username= "root";
    $password= "Admin@123";
    $db_name= "login_page";
    $conn = new mysqli($servername,$username,$password,$db_name,3306);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "";
?>