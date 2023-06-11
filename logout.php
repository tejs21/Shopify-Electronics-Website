<?php 
session_start();
session_destroy(); 
echo'<script> 
            window.location.href= "login.php";
            alert("Registration Unsuccessfull. Please enter valid data");
            </script>';
?>