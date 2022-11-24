<?php   
session_start();
include('conexao.php');

if(empty($_POST['user']) || empty($_POST['pass'])){
    header('Location: index.php');
    exit();
}

$user = mysqli_real_escape_string($conexao, $_POST['user']);
$password = mysqli_real_escape_string($conexao, $_POST['pass']);

$query = "select email from users where (email = '{$user}' or CPF = '{$user}') and pass = md5(md5('{$password}'))";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['user'] = $user;
    header('Location: tabelaUsers.php');
    exit();

}else{
    header('Location: index.php');
    exit();
}
?>