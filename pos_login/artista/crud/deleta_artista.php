<?php
    session_start();
    include_once '../Projeto/conexao.php';

    //conexão com o banco
    /*
    $servername = "127.0.0.1:3306";
    $username = "root";
    $password = "";
    $db_name = "deezefy";

    $connect = mysqli_connect($servername,$username,$password,$db_name);
    */

    if(isset($_POST['btn-deletar'])):
    $idEmail = mysqli_escape_string($conexao,$_POST['id']);


    $sql1 = "DELETE FROM deezefy.artista WHERE email = '$idEmail'";
    $sql2 = "DELETE FROM deezefy.usuario WHERE email = '$idEmail'";

    if(mysqli_query($conexao,$sql1) and mysqli_query($conexao,$sql2)):
        $_SESSION['mensagemA'] = "Deletado com sucesso!";
        header('Location: ../indexA.php');
        else:
            $_SESSION['mensagemA'] = "Erro ao deletar!";
            header('Location: ../indexA.php');
        endif;
    endif;
?>