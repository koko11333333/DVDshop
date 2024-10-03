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
        $sql = "SELECT * FROM dvd";
        $result = $conn->query($sql);
        if(!$result){
            die("Error : ". $conn->$conn_error);
        }
    ?>

    <h1>Movie Information</h1><br>  
        <table> 
            <thead>
                <tr>
                    <th>Movie ID :</th>
                    <th>ชื่อหนัง :</th>
                    <th>รายละเอียด :</th>
                    <th>ระยะเวลา :</th>
                    <th>วันที่ :</th>
                    <th>ธุรกรรม :</th>

                </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["dvdid"]."</td>"."<td>".$row["dvdname"]."</td>"."<td>".$row["dvdinfomation"]."</td>"."<td>".$row["dvdtime"]."</td>"."<td>".$row["dvddate"]."</td>"."<td>"."<a href='editmovie.php?dvdid=".$row["dvdid"]."'><button> Edit </button></a>"."</td>";
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
        <a href='insertmovie.php'><button> Insert Movie</button></a>
        <a href='Home.php'><button>Back</button></a> 

    
    
</body>
</html>