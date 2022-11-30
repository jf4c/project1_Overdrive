<?php   
    session_start();
    include('../../conexao.php');

    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $nf = mysqli_real_escape_string($conexao, $_POST['fantasy']);
    $cnpj = mysqli_real_escape_string($conexao, $_POST['cnpj']);
    $phone = mysqli_real_escape_string($conexao, $_POST['phone']);
    $cep = mysqli_real_escape_string($conexao, $_POST['cep']);
    $num = mysqli_real_escape_string($conexao, $_POST['numero']);
    $rua = mysqli_real_escape_string($conexao, $_POST['rua']);
    $bairro = mysqli_real_escape_string($conexao, $_POST['bairro']);
    $cidade = mysqli_real_escape_string($conexao, $_POST['cidade']);
    $uf = mysqli_real_escape_string($conexao, $_POST['uf']);

    $sqlCPF = "select CNPJ from company where CNPJ = '{$cnpj}';";
    $result = mysqli_query($conexao, $sqlCPF);
    $row = mysqli_num_rows($result);

    if($row == 1){
        header('Location: formCompany.php');
        echo "<span>Usuario já cadastrado</span>";
    }else{
        $query = "insert into company (name, fantasyName, CNPJ, phone, CEP, rua, numero, bairro, cidade, UF) values
        ('{$nome}',
        '{$nf}',
        '{$cnpj}', 
        '{$phone}',   
        '{$cep}', 
        '{$rua}', 
        '{$num}',
        '{$bairro}', 
        '{$cidade}', 
        '{$uf}')";
    
        $addQuery = mysqli_query($conexao, $query);
        header('Location: formCompany.php');
    }
    
?>