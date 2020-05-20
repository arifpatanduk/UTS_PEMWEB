<?php 

require 'function.php';
$a = rand(0,20);
$b = rand(0,20);
$_SESSION['hasil'] = $a + $b;
$hasil = $_SESSION['hasil'];
$jawab = $_POST['jawab'];

if (isset($_POST['submit'])){
    if ($jawab == $hasil){
        echo "<script>
        alert('Jawaban Benar')
        </script>";
    }
    elseif ($jawab != $hasil){
        echo "<script>
        alert('Jawaban Salah')";
        echo "</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?= $a.' + '.$b; ?>  </h3>
    <h3> <?= $hasil; ?></h3>
    
    <form action="" method="POST">
        <input type="number" name="jawab" id="jawab">
        <button type="submit" name="submit"">Submit</button>
    </form>
</body>
</html>