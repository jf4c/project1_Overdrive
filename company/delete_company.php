<?php

    if(!empty($_GET['id'])){
        include_once('../conexao.php');

        $id = $_GET['id'];

        $querySelect = "SELECT *  FROM company WHERE companyId = $id";

        $result = $conexao->query($querySelect);

        if($result->num_rows > 0){
            $queryDelete = "DELETE FROM company WHERE companyId = $id";
            $resultDelete = $conexao->query($queryDelete);
        }
    }
    header('Location: ../tabelaEmpresas.php');
    exit();

    


