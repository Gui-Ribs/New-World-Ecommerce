<?php

    include 'connection.php';

    session_start();

    $Vemail = $_POST['txtemail'];
    $Vsenha = $_POST['txtsenha'];

    $quer = $cn-> query("SELECT idUser, nmUser, uEmail, uPassword, uStatus FROM tbUsuario WHERE uEmail = '$Vemail' AND uPassword = '$Vsenha' ");


    if($quer -> rowCount() == 1) {
        $exibe = $quer -> fetch(PDO::FETCH_ASSOC);
        $_SESSION['ID'] = $exibe['idUser'];
        header('location: index.php');
    } 
    else {
        header('location: erro.php');
    }

?>