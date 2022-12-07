<?php

    if(!empty($_GET['id'])){
        include_once('../../conexao.php');

        $id = $_GET['id'];

        $query = "SELECT * FROM company WHERE companyId = $id";
        $result = $conexao->query($query);
        
        
        $queryUser = "SELECT * FROM users WHERE company_id = $id";
        $resultUser = $conexao->query($queryUser);
        print_r($resultUser);


        if($result->num_rows > 0 && $resultUser->num_rows < 1){
            $queryDelete = "DELETE FROM company WHERE companyId = '{$id}'";
            $resultDelete = $conexao->query($queryDelete);

        }else{
            header('Location: ../tabelaEmpresas.php');
            exit();         
        }
    }
    header('Location: ../tabelaEmpresas.php');
    exit();

    


