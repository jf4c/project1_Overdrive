<?php   
    session_start();
    include('../../conexao.php');
    $companyId = $_GET['id'];
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

    
    $query = "update company 
        set name = '{$nome}', 
            fantasyName = '{$nf}', 
            CNPJ = '{$cnpj}', 
            phone = '{$phone}', 
            CEP = '{$cep}', 
            rua = '{$rua}',
            numero = '{$num}', 
            bairro = '{$bairro}', 
            cidade = '{$cidade}', 
            UF = '{$uf}'
        where companyId= '{$companyId}';";

    	$addQuery = mysqli_query($conexao, $query);
        header('Location: ../tabelaEmpresas.php');
    
?>