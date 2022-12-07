<?php
session_start();
if(!$_SESSION['user']){
    header('Location: index.php');
    exit();
}else{

    $way_user = "/Project1/admin/tabelaUsers.php";
    $way_company = "/Project1/admin/tabelaEmpresas.php";
    
    if($_SESSION['admin'] != 1 && ($_SERVER['PHP_SELF'] == $way_user || $_SERVER['PHP_SELF'] == $way_company)){
        header('Location: ../userNotAdmin/tabelaUsers.php');
        exit();
    
    }
}
?>