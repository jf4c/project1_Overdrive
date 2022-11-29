<?php
    include('../check_log.php');
    include('../conexao.php');

    if(!empty($_GET['id'])){
        $userId = $_GET['id'];
        print_r($userId);
    }
 
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <title>Document</title>
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/tabelaUsers.css">
        <link rel="stylesheet" href="../css/select.css">
    </head>
    
    <body>
        <header>
            <h1><img class="logo" src="../img/logo.png" alt="logo da Overdrive"></h1>
            <nav>
                <ul>
                    <li class="li-nav"><a class="link-nav" href="../tabelaUsers.php">Usuarios</a></li>
                    <li class="li-nav"><a class="link-nav" href="../tabelaEmpresas.php">empresas</a></li>
                    <li class="li-nav"><a class="link-nav" href="../logout.php">sair</a></li>
                </ul>
            </nav>
        </header>    
        
        <main>
            <div class="box">
                <form method="post" action="add_User-Company.php?id=<?php echo $userId;?>">
                    <select name="company" class="select">
                        <option value=""> selecione uma empresa </option>
                        <?php

                        $query = "select * from company order by companyId";
                        $result = mysqli_query($conexao, $query);
                        foreach($result as $opiton){
                            ?>
                                <option value='<?php echo $opiton['companyId'];?>'><?php echo $opiton['name'];?></option>
                            <?php
                        }?>
    
                    </select>
                    <input type="submit" value="enviar" class="button">
                </form>
            </div>
        </main> 
        <script src="js/menuNav.js"></script>
    </body>
</html>
