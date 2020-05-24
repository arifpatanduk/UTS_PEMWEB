<?php

session_start();

require 'function.php';

if (isset($_POST['submit'])) {
    if (login($_POST) > 0 ) {    
        setcookie('join', 'true', strtotime('+1 year'));
        setcookie('nama', $_POST['nama'], strtotime('+1 year') );
        echo "<script>
        alert('Berhasil login')
        document.location.href = 'index.php'
        </script>
        ";
    }
    else {
        echo "<script>
        alert('Gagal login')
        </script>
        ";
        echo mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Join - Mathematics Game</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="css/signin.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="img/logo.png">
    </head>

    <body class="text-center">
        <form class="form-signin" method="POST" action="">
            <img class="mb-4" src="img/logo.png" alt="">
            <h4 class="font-weight-normal">Welcome to</h4>
            <h2 class="mb-3">Mathematics Game</h2>

            <label for="inputName" class="sr-only">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required autofocus>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
            
            <button class="btn btn-lg btn-primary btn-block mt-3" type="submit" name="submit">SUBMIT</button>
            <p class="mt-5 mb-3 text-muted">&copy; Arif Wiranata Patanduk</p>
          </form>
        
    </body>

</html>