<?php
    include("connection.php");
    if(isset($_POST['register'])) { 
        $username=$_POST['user']; 
        $useremail=$_POST['email'];
        $userpass=$_POST['pass'];
 
        if(!empty($username) && !empty($useremail) && !empty($userpass)){
            $query = "insert into login (username, email, password) values('$username','$useremail','$userpass')";
            mysqli_query($conn,$query);

            echo'<script> 
            window.location.href = "login.php";
            alert("Registration Successfull. Redirecting to Login Page")
            </script>';
        }
        else{
            echo'<script> 
            window.location.href= "register.php";
            alert("Registration Unsuccessfull. Please enter valid data")
            </script>';
        }
    }  
?>