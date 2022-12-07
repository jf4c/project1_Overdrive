<?php
    include('../../check_log.php');
    include('../../conexao.php');

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
        <link rel="stylesheet" href="../../css/reset.css">
        <link rel="stylesheet" href="../../css/header.css">
        <link rel="stylesheet" href="../../css/form.css">
    </head>
    <body>
        <header>
            <h1><img class="logo" src="../../img/logo.png" alt="logo da Overdrive"></h1>
            <nav>
                <ul>
                    <li class="li-nav"><a class="link-nav" href="../tabelaUsers.php">Usuarios</a></li>
                    <li class="li-nav"><a class="link-nav" href="../tabelaEmpresas.php">empresas</a></li>
                    <li class="li-nav"><a class="link-nav" href="../logout.php">sair</a></li>
                </ul>
            </nav>
        </header>    
        <main>
            <form action="add_company.php" method="post">
                <div class="nomeEmail">
                    <div class="input-box">
                        <label for="nome">Nome: </label>
                        <input type="text" name="nome" id="nome" class="input nome"  placeholder="Nome" required>     
                    </div>
    
                    <div class="input-box">
                        <label for="fantasy">Nome Fantasia: </label>
                        <input type="text" name="fantasy" id="fantasy" class="input fantasy"  placeholder="fantasy" required>     
                    </div>
                </div>
                <div class="cpfTel">
                    <div class="input-box">
                        <label for="cnpj">CNPJ: </label>
                        <input type="text" name="cnpj" id="cnpj" class="input"  placeholder="CNPJ" required>     
                    </div>
                    
                    <div class="input-box">
                        <label for="phone">Tel: </label>
                        <input type="tel" name="phone" id="phone" class="input"  placeholder="Telefone" required>     
                    </div> 

                </div>
            
                <div class="addres-box">   
                    <div class="input-box">
                        <label for="cep">CEP: </label>
                        <input type="text" name="cep" id="cep" class="input addres cep" value="" size="10"  maxlength="9" onblur="buscaCep(this.value);" placeholder="CEP" required>     
                    </div>
                    
                    <div class="input-box numero">
                        <label for="numero">Número: </label>
                        <input type="text" name="numero" id="numero" class="input"  placeholder="numero" required>     
                    </div>

                </div>
                <div class="addres-box">
                    <div class="input-box">
                        <label for="rua">Rua: </label>
                        <input type="text" name="rua" id="rua" class="input"  placeholder="Rua" required>     
                    </div>
                    <div class="input-box">
                        <label for="bairro">Bairro: </label>
                        <input type="text" name="bairro" id="bairro" class="input"  placeholder="Bairo" required>     
                    </div>
                </div>

                <div class="addres-box">
                    
                    
                    <div class="input-box">
                        <label for="cidade">Cidade: </label>
                        <input type="text" name="cidade" id="cidade" class="input"  placeholder="Cidade" required>     
                    </div>

                    <div class="input-box">
                        <label for="uf">Estado: </label>
                        <input type="text" name="uf" id="uf" class="input" size="2" placeholder="UF" required>     
                    </div>
                </div>


                <input type="submit" value="Adicionar" class="button">

            </form>
        </main> 
        <footer>
        </footer> 
        
    <script src="../js/buscaCEP.js"></script>   

    </body>
    
</html>