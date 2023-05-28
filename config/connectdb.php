<?php
    header('Access-Control-Allow-Origin: *');
    date_default_timezone_set("Asia/Bangkok");
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_saving";

    // $servername = "localhost";
    // $username = "id20328123_root";
    // $password = "p|y4\8Y!wm-k!\b#";
    // $dbname = "id20328123_db_saving";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    function GetMaxId($table, $feild) {
        global $conn;
        $sql = "SELECT IFNULL(MAX($feild),0)+1 AS id FROM $table;";
        $result = $conn->query($sql);
        $data = $result->fetch_assoc();
        return $data["id"];
    }




?>