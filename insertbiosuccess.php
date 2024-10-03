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
    $mid = $conn->real_escape_string($_POST['mid']);
    $mname = $conn->real_escape_string($_POST['mname']);
    $mlastname = $conn->real_escape_string($_POST['mlastname']);
    $address = $conn->real_escape_string($_POST['address']);
    $telephone = $conn->real_escape_string($_POST['telephone']);

    $sql_update = "INSERT INTO member (mid, mname, mlastname, address, telephone) VALUES ('$mid', '$mname', '$mlastname', '$address', '$telephone')";

    $result = $conn->query($sql_update);

    if (!$result) {
        die("Error: " . $conn->error);
    } else {
        echo "Insert Success <br>";
        header("refresh: 1; url=mainmember.php");
        exit(); // ควรใช้ exit() หลัง header เพื่อหยุดการทำงาน
    }

    $conn->close();
    ?> 
</body>
</html>
