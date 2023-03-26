<?php
    include("config/connectdb.php");

    $num1 = $_POST["num1"];   // รับค่า num1 จากแอพหน้า home
    $num2 = $_POST["num2"];   // รับค่า num2 จากแอพหน้า home
    $sum = $num1 + $num2;

    $sql = "
        INSERT INTO test (
            num1,
            num2,
            sum
        ) VALUES (
            '$num1',
            '$num2',
            '$sum'
        )
    ";
    $conn->query($sql);



    echo '
        {
            "kai":"Hello 555",
            "mew":"BBBB",
            "kak":"VVV",
            "kuy":"nnnn",
            "sum":'.$sum.'
        }
    ';

    
    