<?php 

$conn = mysqli_connect('localhost', 'root', '', 'pemweb');

function login($data){
    global $conn;

    $nama = $data['nama'];
    $email = $data['email'];

    $query = "INSERT INTO uts VALUES 
    ('$nama', '$email', 5, 0)";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function acak(){
    $a = rand(0,20);
    $b = rand(0,20);
    echo $a;
    echo ' + ';
    echo $b;
}

function proses($data){
    $jawab = $data['jawab'];
    $hasil = $_SESSION['hasil'];
    if ($jawab == $hasil ){
        return true;
    }
    else {
        return false;
    }
}


?>