<?php
    include("config/connectdb.php");

    // $account_id = $REQUEST["account_id"];
    $account_id = $_POST["account_id"];

    $sql = "
        SELECT * FROM list WHERE account_id='$account_id' ORDER BY list_date DESC
    ";
    $data = [];
    $balance = 0;
    $result = $conn->query($sql);
    while( $row=$result->fetch_assoc() ) {
        $data[] = $row;
        if( $row["list_type"]=="1" ) $balance += $row["amount"];
        else $balance -= $row["amount"];
    }
    echo json_encode([
        "status"=>"ok",
        "data"=>$data,
        "balance"=>$balance
    ]);