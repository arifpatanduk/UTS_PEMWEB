<?php 

session_start();

$a = rand(0,20);
$b = rand(0,20);
$_SESSION['hasil'] = $a + $b;
$hasil = $_SESSION['hasil'];

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
        <h3><?= $a.' + '.$b; ?>  </h3>
        <h3> <?= $hasil; ?></h3>
    
        <input type="number" name="jawab" id="jawab">
        <button type="submit" name="submit"">Submit</button>
    </form>
</body>
</html>