<?php
    include("connection.php");
    if(isset($_POST['submit'])){
        $username = $_POST['user'];
        $password = $_POST["pass"];

        $sql = "select * from login where username = '$username' and password= '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);
        if(is_array($row)){
            $_SESSION["user"] = $row["username"];
            $_SESSION["pass"] = $row["password"];
        }
        else{
            echo '<script>
                window.location.href = "login.php";
                alert("Login Failed")
                </script>';
        }
        if(isset($_SESSION["user"])){
            header("Location:index.php");
        }
    }
    
?>