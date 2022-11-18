<?php   
    session_start();
    include('conexao.php');

    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $password = mysqli_real_escape_string($conexao, $_POST['senha']);
    $checkPassword = mysqli_real_escape_string($conexao, $_POST['senha_conf']);
    $cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
    $cnh = mysqli_real_escape_string($conexao, $_POST['cnh']);
    $phone = mysqli_real_escape_string($conexao, $_POST['phone']);
    $cep = mysqli_real_escape_string($conexao, $_POST['cep']);
    $logradouro = mysqli_real_escape_string($conexao, $_POST['logradouro']);
    $bairro = mysqli_real_escape_string($conexao, $_POST['bairro']);
    $cidade = mysqli_real_escape_string($conexao, $_POST['cidade']);
    $carro = mysqli_real_escape_string($conexao, $_POST['carro']);

    print_r("$nome, $email, $password, $checkPassword, $cpf, $cnh, $phone, $cep, $logradouro, $bairro, $cidade, $carro");
    
    $query = "insert into users (name,  email, CPF, CNH, phone, addres, pass, car) values
    ('{$nome}',
    '{$email}',
    '{$cpf}', 
    '{$cnh}', 
    '{$phone}', 
    '{$cpf} .{$logradouro} . {$bairro} . {$cidade}',  
    md5(md5('{$password}')), 
    '{$carro}')";

    $result = mysqli_query($conexao, $query);

?>