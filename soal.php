<?php 

session_start();
require "function.php";
if ( !isset($_COOKIE['join'])) {
    header("location: index.php");
    exit;
}

$nama = $_SESSION['nama'];
$main = query("SELECT * FROM uts WHERE nama = '$nama' ");

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
    <title>Mathematics Game</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="icon" type="image/png" href="img/logo.png">
    
    <script src="https://kit.fontawesome.com/5994dec7bb.js" crossorigin="anonymous"></script>
</head>
<body>  

    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                Hello <strong>ARIF</strong> tetap semangat ya! You can do the best! 
                <div>
                    <span class="badge badge-danger">
                        <i class="fas fa-heart"></i> <?= $main['lives']; ?>
                    </span>
                    <span class="badge badge-success">
                        <i class="fas fa-coins"></i> <?= $main['score']; ?>
                    </span>    
                </div>
            </div>
            <div class="card-body">
                <h4>Berapakah <?= $a.' + '.$b; ?> ? </h4>
                <form class="form-inline mt-2" method="POST" action="proses.php">
                    <input type="number" class="form-control mb-2 mr-sm-2" id="jawab" placeholder="Jawaban...." name="jawab" required autofocus>
                    <button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>