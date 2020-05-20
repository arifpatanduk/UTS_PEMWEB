<?php 

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