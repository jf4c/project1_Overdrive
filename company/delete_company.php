<?php

    if(!empty($_GET['cnpj'])){
        include_once('../conexao.php');

        $cnpj = $_GET['cnpj'];

        $querySelect = "SELECT *  FROM company WHERE CNPJ = $cnpj";

        $result = $conexao->query($querySelect);

        if($result->num_rows > 0){
            $queryDelete = "DELETE FROM company WHERE CNPJ = $cnpj";
            $resultDelete = $conexao->query($queryDelete);
        }
    }
    header('Location: ../tabelaEmpresas.php');
    exit();

    


