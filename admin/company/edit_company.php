<?php
use LDAP\Result;
    include_once('../../conexao.php');
 
    if(!empty($_GET['id'])){

        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM company WHERE companyId=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0){
            while($user_data = mysqli_fetch_assoc($result)){
                $nome = $user_data['name'];
                $nf = $user_data['fantasyName'];
                $cnpj = $user_data['CNPJ'];
                $phone = $user_data['phone'];
                $cep = $user_data['CEP'];
                $rua = $user_data['rua'];
                $numero = $user_data['numero'];
                $bairro = $user_data['bairro'];
                $cidade = $user_data['cidade'];
                $uf = $user_data['UF'];

                

            }
        }
        else{
            header('Location: ../tabelaempresas.php');
        }
    }
    else{
        header('Location: ../tabelaempresas.php');
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
        <header>
            <h1><img class="logo" src="../../img/logo.png" alt="logo da Overdrive"></h1>
            <nav>
                <ul>
                    <li class="li-nav"><a class="link-nav" href="../tabelaUsers.php">Usuarios</a></li>
                    <li class="li-nav"><a class="link-nav" href="../tabelaEmpresas.php">empresas</a></li>
                    <li class="li-nav"><a class="link-nav" href="../../logout.php">sair</a></li>
                </ul>
            </nav>
        </header>    
        <main>
            <form action="saveEditCompany.php?id=<?php echo $id;?>"  method="post">
                <div class="nomeEmail">
                    <div class="input-box">
                        <label for="nome">Nome: </label>
                        <input type="text" name="nome" id="nome" class="input nome"   placeholder="Nome" value='<?php echo $nome;?>' required>     
                    </div>
    
                    <div class="input-box">
                        <label for="fantasy">Nome Fantasia: </label>
                        <input type="text" name="fantasy" id="fantasy" class="input fantasy"  placeholder="fantasy" value='<?php echo $nf;?>' required>     
                    </div>
                </div>
                <div class="cpfTel">
                    <div class="input-box">
                        <label for="cnpj">CNPJ: </label>
                        <input type="text" name="cnpj" id="cnpj" class="input"  placeholder="CNPJ"  value='<?php echo $cnpj;?>' required>     
                    </div>
                    
                    <div class="input-box">
                        <label for="phone">Tel: </label>
                        <input type="tel" name="phone" id="phone" class="input"  placeholder="Telefone" value='<?php echo $phone;?>'  maxlength="15" onkeyup="handlePhone(event)" required>     
                    </div> 

                </div>
            
                <div class="addres-box">   
                    <div class="input-box">
                        <label for="cep">CEP: </label>
                        <input type="text" name="cep" id="cep" class="input addres cep" size="10"  maxlength="9" onblur="buscaCep(this.value);" placeholder="CEP" value='<?php echo $cep;?>' required>     
                    </div>
                    
                    <div class="input-box numero">
                        <label for="numero">Número: </label>
                        <input type="text" name="numero" id="numero" class="input"  placeholder="numero" value='<?php echo $numero;?>' required>     
                    </div>

                </div>
                <div class="addres-box">
                    <div class="input-box">
                        <label for="rua">Rua: </label>
                        <input type="text" name="rua" id="rua" class="input"  placeholder="Rua" value='<?php echo $rua;?>' required>     
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


                <input type="submit" value="Adicionar" class="button">

            </form>
        </main> 
        <footer>
        </footer> 
        
        <script src="../../js/buscaCEP.js"></script> 
        <script src="../../js/mask.js"></script>       
    </body>
    
</html>
