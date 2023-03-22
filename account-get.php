<?php
    include("config/connectdb.php");

    $sql = "
        SELECT * FROM account ORDER BY account_id
    ";
    $data = [];
    $result = $conn->query($sql);
    while( $row=$result->fetch_assoc() ) {
        $data[] = $row;
    }
    echo json_encode([
        "status"=>"ok",
        "data"=>$data
    ]);