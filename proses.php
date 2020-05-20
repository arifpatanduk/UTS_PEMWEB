<?php

session_start();
$nilai = '';

if ($_POST['jawab'] == $_SESSION['hasil']) {
    $nilai = 'BENAR';
}
elseif ($_POST['jawab'] != $_SESSION['hasil']) {
    $nilai = 'SALAH';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathematics Game</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/5994dec7bb.js" crossorigin="anonymous"></script>
</head>
<body>  

    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <center>
                    Hello <strong>ARIF</strong>, selamat jawaban Anda 
                    <strong><?= $nilai; ?></strong>
                </center>    
            </div>

            <div class="card-body">
                <center>
                    <h3>
                        <span class="badge badge-danger">
                            <div style="font-size: 10px" class="mb-1">LIVES</div>
                            <i class="fas fa-heart"></i> 5
                            
                        </span>
                        <span class="badge badge-success">
                            <div style="font-size: 10px" class="mb-1">SCORE</div>
                            <i class="fas fa-coins"></i> 5
                        </span>
                        
                    </h3>
                    
                    <!-- <form class="form-inline mt-2" method="POST" action=""> -->
                    <a href="test.php">    
                        <button type="submit" name="submit" class="btn btn-primary mb-2">
                            Soal Selanjutnya <i class="fa fa-arrow-circle-right"></i>
                        </button>
                    </a>
                    <!-- </form> -->
                </center>    
            </div>
        </div>
    </div>
</body>
</html>