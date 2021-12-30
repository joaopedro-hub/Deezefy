<?php
    session_start();
    include_once '../Projeto/conexao.php';
    

    if(isset($_POST['btn-deletar'])):
    $idEmail = mysqli_escape_string($conexao,$_POST['id']);


    $sql1 = "DELETE FROM deezefy.ouvinte WHERE email = '$idEmail'";
    $sql2 = "DELETE FROM deezefy.usuario WHERE email = '$idEmail'";

    if(mysqli_query($conexao,$sql1) and mysqli_query($conexao,$sql2)):
        $_SESSION['mensagemO'] = "Deletado com sucesso!";
        header('Location: ../indexO.php');
        else:
            $_SESSION['mensagemO'] = "Erro ao deletar!";
            header('Location: ../indexO.php');
        endif;
    endif;
?>