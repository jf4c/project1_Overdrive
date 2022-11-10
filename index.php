<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <!-- <link rel="stylesheet" href="reset.css"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>

    <?php
        if(!isset($_SESSION['login'])){
            if (isset($_POST['acao'])){
                $login = 'admin';
                $senha = 'admin';

                $loginForm = $_POST['login'];
                $senhaForm = $_POST['pass'];
                if($login == $loginForm && $senha == $senhaForm){
                    echo 'foi';
                    $_SESSION['login'] = $login;
                    header('Location: index.php');
                }else{
                    echo 'Nao foi';
                }
            }
            include('login.php');
        }else{
            include('main.php');
        }       
        
    ?>
</body>
</html>
