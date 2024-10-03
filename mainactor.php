<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This show student infomation webpage</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
    <?php
        require 'conn.php';
        $sql = "SELECT * FROM actor";
        $result = $conn->query($sql);
        if(!$result){
            die("Error : ". $conn->$conn_error);
        }
    ?>
 
    <h1>Actor Infomation</h1><br>  
        <table>
            <thead>
                <tr>
                    <th>Actor ID :</th>
                    <th>Actor name - lastname:</th>
                    <th>Actor Movie :</th>
                    <th>Age :</th>
                    <th>ธุรกรรม :</th>
 
                </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["aid"]."</td>"."<td>".$row["aname"]." ".$row["alastname"]."</td>"."<td>".$row["amovie"]."</td>"."<td>".$row["aage"]."</td>"."<td>"."<a href='editactor.php?aid=".$row["aid"]."'><button style='background-color: red;'> Edit </button></a>"."</td>";
                           
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>  
        <br>
        <a href='insertactor.php'><button> Insert Movie</button></a>
        <a href='Home.php'><button style='background-color: red;'>Back</button></a>
 
   
   
</body>
</html>