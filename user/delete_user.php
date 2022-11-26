<?php

    if(!empty($_GET['id'])){
        include_once('../conexao.php');

        $id = $_GET['id'];

        $querySelect = "SELECT *  FROM users WHERE userId=$id";

        $result = $conexao->query($querySelect);

        if($result->num_rows > 0){
            $queryDelete = "DELETE FROM users WHERE userId = $id";
            $resultDelete = $conexao->query($queryDelete);
        }
    }
    header('Location: ../tabelaUsers.php');

