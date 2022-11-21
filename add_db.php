<?php   
    session_start();
    include('conexao.php');

    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $password = mysqli_real_escape_string($conexao, $_POST['senha']);
    $checkPassword = mysqli_real_escape_string($conexao, $_POST['senha_conf']);
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


    print_r("$nome, $email, $password, $checkPassword, $cpf, $cnh, $phone, $cep, $bairro, $bairro, $cidade, $carro"); 
    
    $query = "insert into users (name,  email, CPF, CNH, phone, addres, pass, car) values
    ('{$nome}',
    '{$email}',
    '{$cpf}', 
    '{$cnh}', 
    '{$phone}', 
    '{$cep} {$rua} {$bairro} {$cidade} {$uf}',
    md5(md5('{$password}')), 
    '{$carro}')";

    $result = mysqli_query($conexao, $query);
    
    header('Location: form.php');
?>