<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet"  href="style.css"> 

</head>
<body>
<form method="post" action="insertbiosuccess.php">
        <h1>Insert</h1>
        <p>

        <label>รหัสสมาชิก :</label>
        <input type="text" name="mid" id="mid" required>

        </p>
        <p>

            <label>ชื่อ :</label>
            <input type="text" name="mname" id="mname" required>

        </p>

        <p>

            <label>นามสกุล :</label>

            <input type="text" name="mlastname" id="mlastname" required>

        </p>

        <p>

            <label>ที่อยู่ :</label>

            <input type="text" name="address" id="address" required>

        </p>

        <p>

            <label>เบอร์โทร :</label>

            <input type="text" name="telephone" id="telephone" required>

        </p>
        <input type="submit" value="บันทึก">
        <a href='mainmember.php'> <button type="button"> Home </button></a>

    </form>

</body>
</html>