<?php
    include("config/connectdb.php");

    $name = $_POST["name"];
    $file = $_FILES["file"];

    // อัพโหลดไฟล์
    $type = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));    // ดึงนามสกุลของไฟล์ เช่น image.png จะได้ png
    $filename = time().".".$type;                                       // สร้างชื่อไฟล์ใหม่ให้ตามตัวเลข timestamp ต่อด้วยนามสกุลไฟล์
    move_uploaded_file($file["tmp_name"], "./file_upload/".$filename);  // อัพโหลดไฟล์ให้เข้าไปในโฟลเดอร์ ./file_upload

    // Insert ข้อมูลเข้าในฐานข้อมูล
    