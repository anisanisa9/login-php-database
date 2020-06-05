<?php 

    //connect database menggunakan mysqli 
    $DB_HOST = "localhost";
    $DB_DATABASE = "db_login";
    $DB_USERNAME = "root";
    $DB_PASSWORD = "";
    $DB_PORT = "3306";

    //konek
    $db1 = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE, $DB_PORT);

    //cek koneksi 
    if($db1->connect_error){
        die('Connection failed :'.$conn->connect_error); 
    }else{
        echo 'yey';
    }
?>