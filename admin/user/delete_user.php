<?php

    if(!empty($_GET['id'])){
        include_once('../../conexao.php');

        $id = $_GET['id'];

        $query = "SELECT *  FROM users WHERE userId=$id";
        $result = $conexao->query($query);
        
        $user = mysqli_fetch_assoc($result); 

        $queryAdmin = "SELECT admin  FROM users WHERE admin = 1";
        $resultAdmin = $conexao->query($queryAdmin);

        if($user["admin"] == 1 && $resultAdmin->num_rows < 2){
            header('Location: ../tabelaUsers.php');
            exit();
        }else{      
            if($result->num_rows > 0){  
                $queryDelete = "DELETE FROM users WHERE userId = $id";
                $resultDelete = $conexao->query($queryDelete);
            }
        }
    }
    header('Location: ../tabelaUsers.php');
    exit();

