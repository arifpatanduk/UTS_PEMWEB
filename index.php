<?php 

session_start();
require 'function.php';

if ( isset($_COOKIE['join'])) {
    if ( isset($_COOKIE['join']) == 'true') {
        $_SESSION['join'] = true;
    }
}
else if ( !isset($_COOKIE['join'])) {
    header("location: login.php");
    exit;
}

$nama = $_COOKIE['nama'];
$main = query("SELECT * FROM uts WHERE nama = '$nama' ");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Mathematics Game</title>
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
                        Hello 
                        <strong> <?= $_COOKIE['nama']; ?> </strong>, 
                        selamat datang di permainan ini!
                        
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
                            <button type="submit" name="submit" class="btn btn-primary mb-2 mt-2">
                                START GAME <i class="fas fa-flag-checkered"></i>
                            </button>
                        </a>

                        <!-- <form action="" method="POST"> -->
                            <p>
                                Bukan Anda? Klik <a href="login.php">di sini</a>
                            </p>
                        <!-- </form> -->
                        
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