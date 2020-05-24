<?php 

session_start();
require "function.php";
$nama = $_SESSION['nama'];
$result = mysqli_query($conn, "SELECT * from uts WHERE nama = '$nama' ");
$row = mysqli_fetch_assoc($result);
// var_dump($row);

$nama = $_SESSION['nama'];
echo $nama;
$main = query("SELECT * FROM uts WHERE nama = '$nama' ");
// var_dump($main['lives']);
echo $main['lives'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses.php" method="POST">
        <h3> </h3>
        <h3></h3>
    
        <input type="number" name="jawab" id="jawab">
        <button type="submit" name="submit"">Submit</button>
    </form>
</body>
</html>