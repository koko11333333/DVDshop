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
            if(!isset($_GET['mid'])){
                header("refresh: 0; url=mainmember.php");
            }
            require 'conn.php';
            $sql = "SELECT * FROM member WHERE mid='$_GET[mid]'";
            $result = $conn->query($sql);
            $row = mysqli_fetch_array($result);
        ?>

    <form method="post" action="editsuccess.php">
        <p>

        <label>รหัสสมาชิก :</label>
        <input type="text" id="mid" id="mid" value="<?=$row['mid'];?>" hidden>
        <input type="text" name="mid" id="mid" value="<?=$row['mid'];?>" />

        </p>
        <p>

            <label>ชื่อ :</label>
            <input type="text" name="mname" id="mname" value="<?=$row['mname'];?>" />

        </p>

        <p>

            <label>นามสกุล :</label>

            <input type="text" name="mlastname" id="mlastname" value="<?=$row['mlastname'];?>" />

        </p>

        <p>

            <label>ที่อยู่ :</label>

            <input type="text" name="address" id="address" value="<?=$row['address'];?>" />

        </p>

        <p>

            <label>เบอร์โทร :</label>

            <input type="text" name="telephone" id="telephone" value="<?=$row['telephone'];?>" />

        </p>
        <input type="submit" value="บันทึก">
        <a href='mainmember.php'><button> Home</button></a>
    </form>

    
</body>
</html>