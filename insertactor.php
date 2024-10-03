<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet"  href="style.css"> 

</head>
<body>
<form method="post" action="insertactorsuccess.php">
        <h1>Insert</h1>
        <p>

        <label>Actor ID :</label>
        <input type="text" name="aid" id="aid" required>

        </p>
        <p>

            <label>Name :</label>
            <input type="text" name="aname" id="aname" required>

        </p>

        <p>

            <label>Lastname :</label>

            <input type="text" name="alastname" id="alastname" required>

        </p>

        <p>

            <label>Actor Movie :</label>

            <input type="text" name="amovie" id="amovie" required>

        </p>

        <p>

            <label>Age :</label>

            <input type="text" name="aage" id="aage" required>

        </p>
        <input type="submit" value="บันทึก">
        <a href='mainactor.php'> <button type="button"> Home </button></a>

    </form>

</body>
</html>
