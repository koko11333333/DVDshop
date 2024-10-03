<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is webpage for edit data</title>
    <link rel="stylesheet"  href="style.css"> 

</head>
<body>
    <?php
            if(!isset($_GET['dvdid'])){
                header("refresh: 0; url=mainmovie.php");
            }
            require 'conn.php';
            $sql = "SELECT * FROM dvd WHERE dvdid='$_GET[dvdid]'";
            $result = $conn->query($sql);
            $row = mysqli_fetch_array($result);
        ?>

    <form method="post" action="editmoviesuccess.php">
        <p>

        <label>รหัสหนัง :</label>
        <input type="text" id="dvdid" id="dvdid" value="<?=$row['dvdid'];?>" hidden>
        <input type="text" name="dvdid" id="dvdid" value="<?=$row['dvdid'];?>" />

        </p>
        <p>

            <label>ชื่อหนัง :</label>
            <input type="text" name="dvdname" id="dvdname" value="<?=$row['dvdname'];?>" />

        </p>

        <p>

            <label>รายละเอียด :</label>

            <input type="text" name="dvdinfomation" id="dvdinfomation" value="<?=$row['dvdinfomation'];?>" />

        </p>

        <p>

            <label>เวลา :</label>

            <input type="text" name="dvdtime" id="dvdtime" value="<?=$row['dvdtime'];?>" />

        </p>

        <p>

            <label>วันที่ :</label>

            <input type="date" name="dvddate" id="dvddate" value="<?=$row['dvddate'];?>" />

        </p>
        <input type="submit" value="บันทึก">
        <a href='mainmovie.php'><button> Home</button></a>
    </form>

    
</body>
</html>