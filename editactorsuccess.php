<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is webpage for show editting data</title>
    <link rel="stylesheet"  href="style.css"> 

</head>
<body>
    <?php
        require 'conn.php';
        $sql_update="UPDATE actor SET aname='$_POST[aname]',alastname='$_POST[alastname]' ,amovie='$_POST[amovie]' ,aage='$_POST[aage]' WHERE aid='$_POST[aid]' ";

                $result= $conn->query($sql_update);

                if(!$result) {
                    die("Error God Damn it : ". $conn->error);
                } else {

                echo "Edit Success <br>";
                header("refresh: 1; url=mainactor.php");
                }

    ?>

</body>
</html>