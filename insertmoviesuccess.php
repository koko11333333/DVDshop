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
    $dvdid = $conn->real_escape_string($_POST['dvdid']);
    $dvdname = $conn->real_escape_string($_POST['dvdname']);
    $dvdinfomation = $conn->real_escape_string($_POST['dvdinfomation']);
    $dvdtime = $conn->real_escape_string($_POST['dvdtime']);
    $dvddate = $conn->real_escape_string($_POST['dvddate']);

    $sql_update = "INSERT INTO dvd (dvdid, dvdname, dvdinfomation, dvdtime, dvddate) VALUES ('$dvdid', '$dvdname', '$dvdinfomation', '$dvdtime', '$dvddate')";

    $result = $conn->query($sql_update);

    if (!$result) {
        die("Error: " . $conn->error);
    } else {
        echo "Insert Success <br>";
        header("refresh: 1; url=mainmovie.php");
    
    }

    $conn->close();
    ?> 
</body>
</html>
