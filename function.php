<?php 

$conn = mysqli_connect('localhost', 'root', '', 'pemweb');

function query($query) {
    global  $conn;
    
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows = $row;
    }
    return $rows;
}

function login($data){
    global $conn;

    $nama = $data['nama'];
    $email = $data['email'];

    $query = "INSERT INTO uts VALUES 
    ('', '$nama', '$email', 5, 0)";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function updateSalah() {
    global $conn;
    $nama = $_COOKIE['nama'];

    $query = "UPDATE uts SET lives = lives-1, score = score-2 WHERE nama = '$nama' ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function updateBenar() {
    global $conn;
    $nama = $_COOKIE['nama'];

    $query = "UPDATE uts SET score = score+10 WHERE nama = '$nama' ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function proses($data){
    $jawab = $data['jawab'];
    $hasil = $_SESSION['hasil'];
    if ($jawab == $hasil ){
        updateBenar();
        return 'selamat jawaban Anda <strong>BENAR</strong>';
    }
    elseif ( $jawab != $hasil) {
        updateSalah();
        return 'maaf jawaban Anda <strong>SALAH</strong>';
    }
}

function ulang() {
    global $conn;

    $nama = $_COOKIE['nama'];
    $query = "UPDATE uts SET score = 0, lives = 5 WHERE nama = '$nama' ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>