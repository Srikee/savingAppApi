<?php
    include("config/connectdb.php");

    $account_id = $_POST["account_id"];
    //$account_id = "ACC-00004";

    $sql = "
        SELECT * FROM account WHERE account_id='".$account_id."'
    ";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();

    $result = $conn->query("SELECT SUM(amount) AS num  FROM `list` WHERE account_id='".$account_id."' AND list_type='1';");
    $row = $result->fetch_assoc();
    $deposit = $row["num"];

    $result = $conn->query("SELECT SUM(amount) AS num  FROM `list` WHERE account_id='".$account_id."' AND list_type='2';");
    $row = $result->fetch_assoc();
    $widthdraw = $row["num"];

    $balance = $deposit - $widthdraw;

    $data["balance"] = $balance;



    echo json_encode([
        "status"=>"ok",
        "data"=>$data
    ]);