<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
<form method="post" action="insertmoviesuccess.php">
    <h1>Insert</h1>

    <p>
        <label>ID หนัง :</label>
        <input type="text" name="dvdid" id="dvdid" required>
    </p>

    <p>
        <label>ชื่อหนัง :</label>
        <input type="text" name="dvdname" id="dvdname" required>
    </p>

    <p>
        <label>รายละเอียด :</label>
        <input type="text" name="dvdinfomation" id="dvdinfomation" required>
    </p>

    <p>
        <label>ระยะเวลา :</label>
        <input type="text" name="dvdtime" id="dvdtime" required>
    </p>

    <p>
        <label>วันที่ :</label>
        <input type="date" name="dvddate" id="dvddate" required>
    </p>

    <input type="submit" value="บันทึก">
    <a href='mainmovie.php'><button type="button"> Home </button></a>
</form>
</body>
</html>
