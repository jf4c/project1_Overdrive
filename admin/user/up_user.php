<?php
    include('../../check_log.php');
    include('../../conexao.php');

    if(!empty($_GET['id'])){
        include_once('../../conexao.php');

        $id = $_GET['id'];
        $query = "update users set admin = 1 where userId = '{$id}'";
        $result = mysqli_query($conexao, $query);
    }
    header('Location: ../tabelaUsers.php');
    exit();