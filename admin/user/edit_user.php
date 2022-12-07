<?php
use LDAP\Result;
    include_once('../../conexao.php');
 
    if(!empty($_GET['id'])){

        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM users WHERE userId=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0){
            while($user_data = mysqli_fetch_assoc($result)){
                $nome = $user_data['name'];
                $email = $user_data['Email'];
                $cpf = $user_data['CPF'];
                $cnh = $user_data['CNH'];
                $phone = $user_data['phone'];
                $carro = $user_data['carro'];
                $cep = $user_data['CEP'];
                $rua = $user_data['rua'];
                $numero = $user_data['numero'];
                $bairro = $user_data['bairro'];
                $cidade = $user_data['cidade'];
                $uf = $user_data['UF'];

                

            }
        }
        else{
            header('Location: ../tabelaUsers.php');
        }
    }
    else{
        header('Location: ../tabelaUsers.php');
    }
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
        <!-- <header>
            <h1><img class="logo" src="img/logo.png" alt="logo da Overdrive"></h1>
            <nav>
                <ul>
                    <li class="li-nav"><a class="link-nav" href="tabelaUsers.php">Usuarios</a></li>
                    <li class="li-nav"><a class="link-nav" href="tabelaEmpresas.php">empresas</a></li>
                    <li class="li-nav"><a class="link-nav" href="logout.php">sair</a></li>
                </ul>
            </nav>
        </header>     -->
        <main>
            <form  action="saveEdituser.php?id=<?php echo $id ;?>" method="post">
                <legend><b>Editar</b></legend>
                <div class="nomeEmail">
                    <div class="input-box">
                        <label for="nome">Nome: </label>
                        <input type="text" name="nome" id="nome" class="input nome"  placeholder="Nome" value='<?php echo $nome;?>'required>     
                    </div>
    
                    <div class="input-box">
                        <label for="email">E-mail: </label>
                        <input type="email" name="email" id="email" class="input email"  placeholder="E-mail" value='<?php echo $email;?>' required>     
                    </div>
                </div>
                <!-- <div class="senhas">
                    <div class="input-box">
                        <label for="senha">Senha: </label>
                        <input type="password" name="senha" id="senha" class="input"  placeholder="Senha" required minlength="8">    
                    </div>
                    
                    <div class="input-box">
                        <label for="senha_conf">Confirme a senha: </label>
                        <input type="password" name="senha_conf" id="senha_conf" class="input"  placeholder="Confirme a senha" required minlength="8">     
                    </div>
                </div> -->
                <div class="cpfTel">
                    <div class="input-box">
                        <label for="cpf">CPF: </label>
                        <input type="text" name="cpf" id="cpf" class="input"  placeholder="CPF" value='<?php echo $cpf;?>' required>     
                    </div>
                    
                    <div class="input-box">
                        <label for="phone">Tel: </label>
                        <input type="tel" name="phone" id="phone" class="input"  placeholder="Telefone" value='<?php echo $phone;?>' required>     
                    </div> 

                </div>

                <div class="cnhCar">
                    <div class="input-box">
                        <label for="cnh">CNH: </label>
                        <input type="text" name="cnh" id="cnh" class="input"  placeholder="CNH" value='<?php echo $cnh;?>'>     
                    </div>
                    
                    <div class="input-box">
                        <label for="carro">Carro: </label>
                        <input type="text" name="carro" id="carro" class="input"  placeholder="Carro" value='<?php echo $carro;?>' >     
                    </div>
                </div>
                
            
                

                <div class="addres-box">   
                    <div class="input-box">
                        <label for="cep">CEP: </label>
                        <input type="text" name="cep" id="cep" class="input addres cep" value=<?php echo $cep;?> size="10"  maxlength="9" onblur="buscaCep(this.value);" placeholder="CEP"  required>     
                    </div>
                    
                    <div class="input-box numero">
                        <label for="numero">Número: </label>
                        <input type="text" name="numero" id="numero" class="input"  placeholder="numero" value='<?php echo $numero;?>' required>     
                    </div>

                </div>
                <div class="addres-box">
                    <div class="input-box">
                        <label for="rua">Rua: </label>
                        <input type="text" name="rua" id="rua" class="input"  placeholder="Rua" value='<?php echo $rua;?>'>     
                    </div>
                    <div class="input-box">
                        <label for="bairro">Bairro: </label>
                        <input type="text" name="bairro" id="bairro" class="input"  placeholder="Bairo" value='<?php echo $bairro;?>' required>     
                    </div>
                </div>

                <div class="addres-box">

                    <div class="input-box">
                        <label for="cidade">Cidade: </label>
                        <input type="text" name="cidade" id="cidade" class="input"  placeholder="Cidade" value='<?php echo $cidade;?>' required>     
                    </div>

                    <div class="input-box">
                        <label for="uf">Estado: </label>
                        <input type="text" name="uf" id="uf" class="input" size="2" placeholder="UF" value='<?php echo $uf;?>' required>     
                    </div>

                </div>


                <input type="submit" value="Editar" class="button">

            </form>
        </main> 
        <footer>
        </footer> 
        
    <script src="../../js/buscaCEP.js"></script>      
    </body>
    
</html>

