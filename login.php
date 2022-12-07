<?php   
session_start();
include('conexao.php');

if(empty($_POST['user']) || empty($_POST['pass'])){
    header('Location: index.php');
    exit();
}

$user = mysqli_real_escape_string($conexao, $_POST['user']);
$password = mysqli_real_escape_string($conexao, $_POST['pass']);

$query = "select email, admin from users where email = '{$user}' and pass = md5(md5('{$password}'))";
$result = mysqli_query($conexao, $query);
$user_data = mysqli_fetch_assoc($result); 
$admin = $user_data['admin'];
$row = mysqli_num_rows($result);


if($row == 1){
    if($admin){
        $_SESSION['user'] = $user;
        $_SESSION['admin'] = $admin;
        header('Location: admin/tabelaUsers.php');
        exit();
    }else{
        $_SESSION['user'] = $user;
        $_SESSION['admin'] = $admin;
        header('Location: userNotAdmin/tabelaUsers.php');
        exit();
    }

}else{
    header('Location: index.php');
    exit();
}
?>