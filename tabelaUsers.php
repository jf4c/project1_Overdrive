<?php
    include('check_log.php');
    include('conexao.php');

    $query = "select * from users order by userId";
    $result = mysqli_query($conexao, $query);
 
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <title>Document</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/tabelaUsers.css">
    </head>
    
    <body>
        <header>
            <h1><img class="logo" src="img/logo.png" alt="logo da Overdrive"></h1>
            <nav>
                <ul>
                    <li class="li-nav"><a class="link-nav" href="tabelaUsers.php">Usuarios</a></li>
                    <li class="li-nav"><a class="link-nav" href="tabelaEmpresas.php">empresas</a></li>
                    <li class="li-nav"><a class="link-nav" href="logout.php">sair</a></li>
                </ul>
            </nav>
        </header>    
        
        <main>
            <table>
                <thead>
                    <tr>
                        <!-- <th scope="col">userId</th> -->
                        <th width="7%" scope="col">Nome</th>
                        <th width="10%" scope="col">E-mail</th>
                        <th width="7%" scope="col">CPF</th>
                        <th width="7%" scope="col">CNH</th>
                        <th width="5%" scope="col">carro</th>
                        <th width="7%" scope="col">Telefone</th>
                        <th width="7%" scope="col">CEP</th>
                        <th width="7%" scope="col">Rua</th>
                        <th width="4%" scope="col">numero</th>
                        <th width="7%" scope="col">Bairro</th>
                        <th width="7%" scope="col">cidade</th>
                        <th width="3%" scope="col">UF</th>
                        <th width="7%" scope="col">Empresas</th>
                        <th width="7%" scope="col">***</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                        while($user_data = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            // echo "<td>".$user_data['userId']."</td>";
                            echo "<td>".$user_data['name']."</td>";
                            echo "<td>".$user_data['Email']."</td>";
                            echo "<td>".$user_data['CPF']."</td>";
                            echo "<td>".$user_data['CNH']."</td>";
                            echo "<td>".$user_data['carro']."</td>";
                            echo "<td>".$user_data['phone']."</td>";
                            echo "<td>".$user_data['CEP']."</td>";
                            echo "<td>".$user_data['rua']."</td>";
                            echo "<td>".$user_data['numero']."</td>";
                            echo "<td>".$user_data['bairro']."</td>";
                            echo "<td>".$user_data['cidade']."</td>";
                            echo "<td>".$user_data['UF']."</td>";
                            echo "<td></td>";
                            echo "<td>
                                    <a href='edit.php?id=$user_data[userId]'>
                                        <abbr title='editar'>
                                            <span class='material-symbols-outlined button-td edit'>edit</span>
                                        </abbr>
                                    </a>
                                    <a href='delete.php?id=$user_data[userId]'>
                                        <abbr title='apagar'>
                                            <span class='material-symbols-outlined button-td delete'>delete</span>
                                        </abbr>
                                    </a>
                                    
                                    </td>";  
                            echo "</tr>";
                        }
                        ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="14" class="add">
                            <abbr title='adicionar'>
                                <a class="" href="formUser.php">
                                    <span class='material-symbols-outlined add'>add</span>
                                </a>
                            </abbr>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </main> 
        <script src="js/menuNav.js"></script>
    </body>
</html>
