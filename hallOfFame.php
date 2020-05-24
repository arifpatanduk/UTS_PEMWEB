<?php 

require "function.php";
$result = mysqli_query($conn, "SELECT * FROM uts ORDER BY score DESC LIMIT 0,10");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall of Fame - Mathematics Game</title>
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
                    <strong>HALL OF FAME</strong>
                </center>    
            </div>

            <div class="card-body">
                <center>
                <div class="col-10">
                    <table class="table table-bordered">
                        <thead class="thead-dark text-center">
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>SCORE</th>
                            </tr>
                        </thead>

                        <tbody">
                            <?php $i = 1; ?>
                            <?php while ( $row = mysqli_fetch_assoc($result)) : ?>
                            <tr>
                                <td class="text-center"><?= $i; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td class="text-center"><?= $row['score']; ?></td>
                            </tr>
                            <?php $i++; ?>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>    
                    
                </center>    
            </div>
        </div>
        
    </div>

    <!-- LOADING -->
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