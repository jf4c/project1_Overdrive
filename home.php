<?php
    include('check_log.php');
    include('conexao.php');

    $query = "select * from users order by userId";
    $result = mysqli_query($conexao, $query);
 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <title>Document</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/home.css">
    </head>
    
    <body>
        <header>
            <h1><img class="logo" src="img/logo.png" alt="logo da Overdrive"></h1>
            <nav>
                <ul>
                    <li><a class="add" href="home.php">Usuarios</a></li>
                    <li><a class="add" href="empresas.php">empresas</a></li>
                    <li><a class="add" href="form.php">Adicionar</a></li>
                </ul>
            </nav>
        </header>    
        
        <main>
            <table>
                <thead>
                    <tr>
                        <th scope="col">userId</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">CPF</th>
                        <th scope="col">CNH</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">endereço</th>
                        <th scope="col">carro</th>
                        <th scope="col">Empresa</th>
                        <th scope="col">**</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                        while($user_data = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td>".$user_data['userId']."</td>";
                            echo "<td>".$user_data['name']."</td>";
                            echo "<td>".$user_data['Email']."</tdclass=>";
                            echo "<td>".$user_data['CPF']."</td>";
                            echo "<td>".$user_data['CNH']."</td>";
                            echo "<td>".$user_data['phone']."</td>";
                            echo "<td>".$user_data['addres']."</td>";
                            echo "<td>".$user_data['car']."</td>";
                            echo "<td></td>";
                            echo "<td>
                                    <a href='edit.php?id=$user_data[userId]'>
                                        <span class='material-symbols-outlined button-td edit'>edit</span>
                                    </a>
                                    <a href='delete.php?id=$user_data[userId]'>
                                        <span class='material-symbols-outlined button-td delete'>delete</span>
                                    </a>
                                    
                                    </td>";  
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </main> 
        <footer>
        </footer>  
    </body>
</html>
