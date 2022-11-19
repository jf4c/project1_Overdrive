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
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/form.css">

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
            <form action="add_db.php" method="post">
                <div class="input-box">
                    <label for="nome">nome: </label>
                    <input type="text" name="nome" id="nome" class="input"  placeholder="nome">     
                </div>

                <div class="input-box">
                    <label for="email">E-mail: </label>
                    <input type="email" name="email" id="email" class="input"  placeholder="e-mail">     
                </div>
                
                <div class="input-box">
                    <label for="senha">Senha: </label>
                    <input type="password" name="senha" id="senha" class="input"  placeholder="Senha">     
                </div>
                
                <div class="input-box">
                    <label for="senha_conf">Confirme a senha: </label>
                    <input type="password" name="senha_conf" id="senha_conf" class="input"  placeholder="senha">     
                </div>
                
                <div class="input-box">
                    <label for="cpf">CPF: </label>
                    <input type="number" name="cpf" id="cpf" class="cpf"  placeholder="CPF">     
                </div>

                <div class="input-box">
                    <label for="cnh">CNH: </label>
                    <input type="number" name="cnh" id="cnh" class="cnh"  placeholder="CNH">     
                </div>
                
                <div class="input-box">
                    <label for="phone">Tel: </label>
                    <input type="tel" name="phone" id="phone" class="phone"  placeholder="phone">     
                </div>

                <div class="addres">   
                    <div class="input-box">
                        <label for="cep">CEP: </label>
                        <input type="number" name="cep" id="cep" class="cnh"  placeholder="CEP">     
                    </div>

                    <div class="input-box">
                        <label for="logradouro">Logradouro/Nome: </label>
                        <input type="number" name="logradouro" id="logradouro" class=""  placeholder="Logradouro/Nome">     
                    </div>

                    <div class="input-box">
                        <label for="bairro">Bairro/Distrito: </label>
                        <input type="number" name="bairro" id="bairro" class="bairro"  placeholder="CNH">     
                    </div>
                    
                    <div class="input-box">
                        <label for="cidade">cidade/UF: </label>
                        <input type="number" name="cidade" id="cidade" class="cidade"  placeholder="cidade">     
                    </div>


                </div>
                <div class="input-box">
                    <label for="carro">Carro: </label>
                    <input type="carro" name="carro" id="carro" class="carro"  placeholder="carro">     
                </div>
                <input type="submit" value="Adicionar">

            </form>
        </main> 
        <footer>

        </footer>       
    </body>
</html>