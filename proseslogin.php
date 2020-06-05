<?php
    session_start();
    include 'koneksi.php';
 
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cekuser = mysqli_query($db1, "SELECT * FROM `admin` WHERE username='$username' AND password = '$password'");

    $cek = mysqli_num_rows($cekuser);

    if($cek > 0){
        $data = mysqli_fetch_assoc($cekuser);
        $_SESSION ['username'] = $username;
        $_SESSION ['nama'] =$data['nama'];
        $_SESSION ['status'] = "sudah login";
        $_SESSION ['id_login'] = $data['id'];
        header("location:halaman.php");
    }else{
        header("location:login.php");
    }

?>
