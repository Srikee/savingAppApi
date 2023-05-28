<?php
    include("config/connectdb.php");

    $username = $_POST["username"];   // รับค่า username จากแอพหน้า login
    $password = $_POST["password"];   // รับค่า password จากแอพหน้า login

    $sql = "
        SELECT * FROM staff WHERE username='$username' AND password='$password'
    ";
    $result = $conn->query($sql);
    if ($result->num_rows==1) {
        echo json_encode([
            "status"=>"ok",
            "data"=>$result->fetch_assoc()
        ]);
    } else {
        echo json_encode([
            "status"=>"no"
        ]);
    }