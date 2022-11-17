<?php   
session_start();
include('conexao.php');

if(empty($_POST['user']) || empty($_POST['pass'])){
    header('Location: index.php');
    exit();
}

$user = mysqli_real_escape_string($conexao, $_POST['user']);
$password = mysqli_real_escape_string($conexao, $_POST['pass']);

$query = "select addres from users where addres = '{$user}' and pass = md5(md5('{$password}'))";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['user'] = $user;
    header('Location: home.php');
    exit();

}else{
    header('Location: index.php');
    exit();
}
?>