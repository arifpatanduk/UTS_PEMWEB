<?php

session_start();
require "function.php";

if ( isset($_SESSION['gameOver']) != 'yes') {
    header("Location: index.php");
    exit;
}

$nama = $_COOKIE['nama'];
$main = query("SELECT * FROM uts WHERE nama = '$nama' ");

if ( isset($_POST['selesai'])) {
    // mengakhiri cookie
    setcookie('nama', '', 0);
    setcookie('join', '', 0);
    header("Location:hallOfFame.php");
}
if ( isset($_POST['ulang'])) {
    ulang();
    session_destroy();
    header("Location:index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Over - Mathematics Game</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/load.css">
    <link rel="icon" type="image/png" href="img/logo.png">
    
    <script src="https://kit.fontawesome.com/5994dec7bb.js" crossorigin="anonymous"></script>

</head>
<body>
    
    <div id="load">
        <div class="box1"></div>
        <div class="box2"></div>
        <div class="box3"></div>
    </div>

    <div style="display: none;" id="myDiv" class="container mt-3 animate-bottom">
        <div class="card">
            <div class="card-header">
                <center>
                    Hello <strong><?= $_COOKIE['nama']; ?></strong>, 
                    Sayang sekali permainan sudah selesai. Semoga lain kali bisa lebih baik ya. 
                </center>    
            </div>

            <div class="card-body">
                <center>
                    <h3>
                        <span class="badge badge-success">
                            <i class="fas fa-coins"></i> SCORE ANDA : <?= $main['score']; ?>
                        </span>
                    </h3>
                    <form class="form mt-2" method="POST" action="">
                        <button type="submit" name="ulang" class="btn btn-primary mb-2 mt-2">
                            MAIN LAGI <i class="fas fa-redo-alt"></i>
                        </button>
                        <button type="submit" name="selesai" class="btn btn-danger mb-2 mt-2" onclick="return confirm('Anda yakin ingin mengakhiri permainan ini?');">
                            SELESAI <i class="fas fa-times"></i>
                        </button>
                    </form>
                </center>    
            </div>
        </div>
        
    </div>

    <script>
        var load = document.getElementById("load");
        var div = document.getElementById("myDiv");

        window.addEventListener('load', function(){
            load.style.display="none";
            div.style.display="block";
        });
    </script>

</body>
</html>