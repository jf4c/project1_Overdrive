<?php
    include('check_log.php');
    include('conexao.php');

    $query = "select * from users order by userId desc";
    $result = mysqli_query($conexao, $query);
 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/home.css">
    </head>
    
    <body>
        <header>
            <h1><img src="img/logo.png" alt="logo da Overdrive"></h1>
            <nav>
                <ul>
                    <li><a href="form.php">Adicionar</a></li>
                </ul>
            </nav>
        </header>    
        
        <main>
            <table border="1">
                <thead>
                    <tr>

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
                            echo "<td>".$user_data['name']."</td>";
                            echo "<td>".$user_data['Email']."</td>";
                            echo "<td>".$user_data['CPF']."</td>";
                            echo "<td>".$user_data['CNH']."</td>";
                            echo "<td>".$user_data['phone']."</td>";
                            echo "<td>".$user_data['addres']."</td>";
                            echo "<td>".$user_data['car']."</td>";
                        
                        
                        }
                    ?>
                </tbody>
                <tfoot>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tfoot>
            </table>
            

        </main> 
        <footer>

        </footer>       
    </body>
</html>