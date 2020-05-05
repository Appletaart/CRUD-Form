<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'studentweb');
// set database connection ใส่ @ ข้างหน้าเพื่อbrouwer show error ที่หน้าจอ
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME)
OR die('Could not connect to Mysql: ' . mysqli_connect_error());

    session_start();
/*
    $sql = "SELECT * FROM students LIMIT 3";
    $response = mysqli_query($dbc, $sql);
    //check connect to the database
    if($response) {
        echo "Connectie gemaakt met de database";
    }else{
        echo "Couldn't issue database query<br>";
        echo mysqli_error($dbc);
    }*/
?>
