<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DB', 'dados');

    $conexao = mysqli_connect(HOST, USER, PASS, DB) or die ('erro');
    
    // if (!$conexao) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
    // echo "Connected successfully";
    // mysqli_close($conexao);

?>