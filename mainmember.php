<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This show student information webpage</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <?php
        require 'conn.php';
        $sql = "SELECT * FROM member";
        $result = $conn->query($sql);
        if (!$result) {
            die("Error: " . $conn->error);
        }
    ?>

    <h1>Member</h1><br>  
    <table> 
        <thead>
            <tr>
                <th>Member ID</th>
                <th>ชื่อ-นามสกุล</th>
                <th>ที่อยู่</th>
                <th>เบอร์โทร</th>
                <th>ธุรกรรม</th>
                <th>ลบ</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Show data by fetching from database
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>".$row["mid"]."</td>
                                <td>".$row["mname"]." ".$row["mlastname"]."</td>
                                <td>".$row["address"]."</td>
                                <td>".$row["telephone"]."</td>
                                <td>
                                    <a href='editbio.php?mid=".$row["mid"]."'><button>Edit</button></a>
                                    <a href='deletebio.php?mid=".$row["mid"]."' onclick='return confirm(\"Are you sure you want to delete this member?\");'>
                                </td>
                                <td>
                                <button>Delete</button></a>
                                </td>
                              </tr>";    
                    }
                } else {
                    echo "<tr><td colspan='6'>0 results</td></tr>";
                }
                $conn->close();
            ?>
        </tbody>
    </table>  
    <br>
    <a href='insertbio.php'><button>Insert Member</button></a>
    <a href='Home.php'><button>Back</button></a>
</body>
</html>
