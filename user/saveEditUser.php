<?php   
    session_start();
    include('../conexao.php');
    $userId = $_GET['id'];
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
    $phone = mysqli_real_escape_string($conexao, $_POST['phone']);
    $cnh = mysqli_real_escape_string($conexao, $_POST['cnh']);
    $carro = mysqli_real_escape_string($conexao, $_POST['carro']);
    $cep = mysqli_real_escape_string($conexao, $_POST['cep']);
    $num = mysqli_real_escape_string($conexao, $_POST['numero']);
    $rua = mysqli_real_escape_string($conexao, $_POST['rua']);
    $bairro = mysqli_real_escape_string($conexao, $_POST['bairro']);
    $cidade = mysqli_real_escape_string($conexao, $_POST['cidade']);
    $uf = mysqli_real_escape_string($conexao, $_POST['uf']);

    
    $query = "update users 
        set name = '{$nome}', 
            email = '{$email}', 
            CPF = '{$cpf}', 
            CNH = '{$cnh}', 
            carro = '{$carro}', 
            phone = '{$phone}', 
            CEP = '{$cep}', 
            rua = '{$rua}',
            numero = '{$num}', 
            bairro = '{$bairro}', 
            cidade = '{$cidade}', 
            UF = '{$uf}'
        where userId = '{$userId}';";

    	$addQuery = mysqli_query($conexao, $query);
        header('Location: ../tabelaUsers.php');
    
?>