<?php
    include('../../check_log.php');
    include('../../conexao.php');
    
    $companyId = mysqli_real_escape_string($conexao, $_POST['company']);
    $userId = $_GET['id'];
    $query = "update users set company_id = '{$companyId}' where userId = '{$userId}'";
    
    $result = mysqli_query($conexao, $query);
   
    header('Location: ../tabelaUsers.php');
    exit();