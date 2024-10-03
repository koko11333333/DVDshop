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
            if(!isset($_GET['aid'])){
                header("refresh: 0; url=mainactor.php");
            }
            require 'conn.php';
            $sql = "SELECT * FROM actor WHERE aid='$_GET[aid]'";
            $result = $conn->query($sql);
            $row = mysqli_fetch_array($result);
        ?>

    <form method="post" action="editactorsuccess.php">
        <p>

        <label>Actor ID :</label>
        <input type="text" id="aid" id="aid" value="<?=$row['aid'];?>" hidden>
        <input type="text" name="aid" id="aid" value="<?=$row['aid'];?>" />

        </p>
        <p>

            <label>Name :</label>
            <input type="text" name="aname" id="aname" value="<?=$row['aname'];?>" />

        </p>

        <p>

            <label>Lastname :</label>

            <input type="text" name="alastname" id="alastname" value="<?=$row['alastname'];?>" />

        </p>

        <p>

            <label>Actor Movie :</label>

            <input type="text" name="amovie" id="amovie" value="<?=$row['amovie'];?>" />

        </p>

        <p>

            <label>Actor Age :</label>

            <input type="text" name="aage" id="aage" value="<?=$row['aage'];?>" />

        </p>

        
        <input type="submit" value="บันทึก">
        <a href='mainactor.php'><button> Home</button></a>
    </form>

    
</body>
</html>