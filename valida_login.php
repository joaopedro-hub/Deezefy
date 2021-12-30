<?php
session_start();
//para não entrar direto nessa página
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}
$email = mysqli_real_escape_string($conexao,$_POST['email']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

$query = "SELECT email FROM deezefy.usuario WHERE email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao,$query);
$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email'] = $email;
    header('Location: pos_login/tela_geral.php');
    exit();
}else if($row == 0){
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}