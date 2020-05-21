<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathematics Game</title>
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
                        Hello <strong>ARIF</strong>, Sayang sekali permainan sudah selesai. Semoga lain kali bisa lebih baik. 
                    </center>    
                </div>

                <div class="card-body">
                    <center>
                        <h3>
                            <span class="badge badge-success">
                                <i class="fas fa-coins"></i> SCORE ANDA = 5
                            </span>
                        </h3>
                        <!-- <form class="form-inline mt-2" method="POST" action=""> -->
                        <button type="submit" name="submit" class="btn btn-danger mb-2 mt-2">
                                MAIN LAGI <i class="fas fa-redo-alt"></i>
                            </button>
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