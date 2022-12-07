<?php   
    session_start();
    include('../../conexao.php');

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

    
    $sqlCPF = "select CPF from users where CPF = '{$cpf}';";
    $result = mysqli_query($conexao, $sqlCPF);
    $row = mysqli_num_rows($result);





    if($password !== $checkPassword){
        header('Location: formUser.php');
        exit();

    }elseif($row == 1){
        header('Location: formUser.php');
        exit();

    }else{
        $query = "insert into users (name, email, pass, CPF, CNH, carro, phone, CEP, rua, numero, bairro, cidade, UF) values
        ('{$nome}',
        '{$email}',
        md5(md5('{$password}')), 
        '{$cpf}', 
        '{$cnh}', 
        '{$carro}',
        '{$phone}',   
        '{$cep}', 
        '{$rua}', 
        '{$num}',
        '{$bairro}', 
        '{$cidade}', 
        '{$uf}')";
    
        $addQuery = mysqli_query($conexao, $query);
        header('Location: ../tabelaUsers.php');
        exit();
    }
    
?>