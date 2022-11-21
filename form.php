<?php
    include('check_log.php');
    include('conexao.php');

    $query = "select * from users order by userId desc";
    $result = mysqli_query($conexao, $query);
 
?>

<!DOCTYPE html>
<html lang="pt-br">
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
                    <li class="li-nav"><a class="link-nav" href="home.php">Usuarios</a></li>
                    <li class="li-nav"><a class="link-nav" href="empresas.php">empresas</a></li>
                    <li class="li-nav"><a class="link-nav" href="form.php">Adicionar</a></li>
                </ul>
            </nav>
        </header>    
        <main>
            <form action="add_db.php" method="post">
                <div class="nomeEmail">
                    <div class="input-box">
                        <label for="nome">Nome: </label>
                        <input type="text" name="nome" id="nome" class="input nome"  placeholder="Nome">     
                    </div>
    
                    <div class="input-box">
                        <label for="email">E-mail: </label>
                        <input type="email" name="email" id="email" class="input email"  placeholder="E-mail">     
                    </div>
                </div>
                <div class="senhas">
                    <div class="input-box">
                        <label for="senha">Senha: </label>
                        <input type="password" name="senha" id="senha" class="input"  placeholder="Senha">    
                    </div>
                    
                    <div class="input-box">
                        <label for="senha_conf">Confirme a senha: </label>
                        <input type="password" name="senha_conf" id="senha_conf" class="input"  placeholder="Confirme a senha">     
                    </div>
                </div>
                <div class="cpfTel">
                    <div class="input-box">
                        <label for="cpf">CPF: </label>
                        <input type="text" name="cpf" id="cpf" class="input"  placeholder="CPF">     
                    </div>
                    
                    <div class="input-box">
                        <label for="phone">Tel: </label>
                        <input type="tel" name="phone" id="phone" class="input"  placeholder="Telefone">     
                    </div>

                </div>

                <div class="cnhCar">
                    <div class="input-box">
                        <label for="cnh">CNH: </label>
                        <input type="text" name="cnh" id="cnh" class="input"  placeholder="CNH">     
                    </div>
                    
                    <div class="input-box">
                        <label for="carro">Carro: </label>
                        <input type="text" name="carro" id="carro" class="input"  placeholder="Carro">     
                    </div>
                </div>
                
            
                

                <div class="addres-box">   
                    <div class="input-box">
                        <label for="cep">CEP: </label>
                        <input type="text" name="cep" id="cep" class="input addres cep" value="" size="10"  maxlength="9" onblur="buscaCep(this.value);" placeholder="CEP">     
                    </div>

                    
                    
                    <div class="input-box numero">
                        <label for="numero">Número: </label>
                        <input type="text" name="numero" id="numero" class="input"  placeholder="numero">     
                    </div>

                </div>
                <div class="addres-box">
                    <div class="input-box">
                        <label for="rua">Rua: </label>
                        <input type="text" name="rua" id="rua" class="input"  placeholder="Rua">     
                    </div>
                    <div class="input-box">
                        <label for="bairro">Bairro: </label>
                        <input type="text" name="bairro" id="bairro" class="input"  placeholder="Bairo">     
                    </div>
                </div>

                <div class="addres-box">
                    
                    
                    <div class="input-box">
                        <label for="cidade">Cidade: </label>
                        <input type="text" name="cidade" id="cidade" class="input"  placeholder="Cidade">     
                    </div>

                    <div class="input-box">
                        <label for="uf">Estado: </label>
                        <input type="text" name="uf" id="uf" class="input" size="2" placeholder="UF">     
                    </div>
                </div>


                <input type="submit" value="Adicionar" class="button">

            </form>
        </main> 
        <footer>
        </footer> 
        
    <script src="js/buscaCEP.js"></script>      
    </body>
    
</html>