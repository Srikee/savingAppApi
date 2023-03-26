<?php
    include("config/connectdb.php");

    $staff_name = $_POST["staff_name"];       // รับค่า staff_name จากแอพหน้า register
    $staff_lname = $_POST["staff_lname"];     // รับค่า staff_lname จากแอพหน้า register
    $username = $_POST["username"];           // รับค่า username จากแอพหน้า register
    $password = $_POST["password"];           // รับค่า password จากแอพหน้า register

    $staff_id = GetMaxId("staff", "staff_id");
    $sql = "
        INSERT INTO staff (
            staff_id,
            staff_name,
            staff_lname,
            username,
            password
        ) VALUES (
            '$staff_id',
            '$staff_name',
            '$staff_lname',
            '$username',
            '$password'
        )
    ";
    $result = $conn->query($sql);
    if ($result) {
        echo json_encode([
            "status"=>"ok"
        ]);
    } else {
        echo json_encode([
            "status"=>"no"
        ]);
    }