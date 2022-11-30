<?php
    include('../../check_log.php');
    include('../../conexao.php');

    $userId = $_GET['id'];
   

    $query = "update users set company_id = null where userId = '{$userId}';";
    $result = mysqli_query($conexao, $query);
    
    header('Location: ../tabelaUsers.php');
    exit();

 
?>