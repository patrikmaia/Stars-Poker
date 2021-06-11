<?php 
    $servidor = "localhost";
    $dbname = "formulario2";
    $dbusuario = "root";
    $dbsenha = "";
    $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

    if (!$conn){
        die("conexão falhou" . mysqli_connect_error());
    }

?>