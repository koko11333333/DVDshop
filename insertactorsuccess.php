<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Success</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <?php
    require 'conn.php';

    // ป้องกัน SQL Injection
    $aid = $conn->real_escape_string($_POST['aid']);
    $aname = $conn->real_escape_string($_POST['aname']);
    $alastname = $conn->real_escape_string($_POST['alastname']);
    $amovie = $conn->real_escape_string($_POST['amovie']);
    $aage = $conn->real_escape_string($_POST['aage']);

    // ตรวจสอบค่าที่ส่งมา
    if (empty($aid) || empty($aname) || empty($alastname) || empty($amovie) || empty($aage)) {
        die("Error: Please fill in all fields.");
    }

    $sql_update = "INSERT INTO actor (aid, aname, alastname, amovie, aage) VALUES ('$aid', '$aname', '$alastname', '$amovie', '$aage')";

    $result = $conn->query($sql_update);

    if (!$result) {
        die("Error: " . $conn->error);
    } else {
        echo "Insert Success <br>";
        header("refresh: 1; url=mainactor.php");
        exit(); // หยุดการทำงานหลังจาก header
    }

    $conn->close();
    ?> 
</body>
</html>
