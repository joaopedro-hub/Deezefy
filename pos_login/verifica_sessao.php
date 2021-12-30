<?php
//session_start();
//não deixa entrar em outra página,se não tiver feito o login, redirecionando
//para a página de login

if(!$_SESSION['email']){
    header('Location: ../index.php');
    exit();
}
?>