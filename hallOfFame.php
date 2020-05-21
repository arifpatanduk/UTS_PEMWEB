<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathematics Game</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    
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
                        <table id="tabel-data" class="table table-bordered table-striped" data-order='[[ 1, "asc" ]]' data-page-length='25'>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>    
                        
                    </center>    
                </div>
            </div>
        
    </div>

    <!-- DATA TABLE -->
    <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
        "paging":false
        });
    </script>

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