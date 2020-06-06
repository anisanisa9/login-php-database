<?php

    session_start();
    
    if($_SESSION['status']!="sudah login"){
        header("location:login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        body{
            margin-top:10%;
            background-image: url('bg.jpg');
            background-size: cover;
        }
    </style>
</head>
<body style="text-align:center; color:white;">
    <h1>Hallooooooo <?php echo $_SESSION['nama'];?>...</h1>

    <h2>Selamat Datang Di Contoh Program Login Dan Logout</h2>

    <br>

    <a href="logout.php"><button>logout</button></a>
</body>
</html>