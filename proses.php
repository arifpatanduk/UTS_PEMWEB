<?php

session_start();
require "function.php";

if ( isset($_POST['submit'])) {
    $tampil = proses($_POST);
}
else{
    header("Location:soal.php");
    exit;
}

$nama = $_COOKIE['nama'];
$main = query("SELECT * FROM uts WHERE nama = '$nama' ");

if ( $main['lives'] == '0') {
    $_SESSION['gameOver'] = 'yes';
    header("Location: gameOver.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathematics Game</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <script src="https://kit.fontawesome.com/5994dec7bb.js" crossorigin="anonymous"></script>
</head>
<body>  

    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <center>
                    Hello <strong>ARIF</strong>, <?= $tampil; ?>
                </center>    
            </div>

            <div class="card-body">
                <center>
                    <h3>
                        <span class="badge badge-danger">
                            <div style="font-size: 10px" class="mb-1">LIVES</div>
                            <i class="fas fa-heart"></i> <?= $main['lives']; ?>
                            
                        </span>
                        <span class="badge badge-success">
                            <div style="font-size: 10px" class="mb-1">SCORE</div>
                            <i class="fas fa-coins"></i> <?= $main['score']; ?>
                        </span>
                        
                    </h3>
                    
                    <a href="soal.php">    
                        <button type="submit" name="submit" class="btn btn-primary mb-2">
                            Soal Selanjutnya <i class="fas fa-forward"></i>
                        </button>
                    </a>
                    
                </center>    
            </div>
        </div>
    </div>
</body>
</html>