<?php
    session_start();
    include_once '../Projeto/conexao.php';

    

    if(isset($_POST['btn-editar'])):
        $nomeM = mysqli_escape_string($conexao,$_POST['nome']);
        $duracao = mysqli_escape_string($conexao,$_POST['duracao']);
        $email_Art = mysqli_escape_string($conexao,$_POST['Artista_email']);
        $idM = mysqli_escape_string($conexao,$_POST['id']);
    


    $sql1 = "UPDATE deezefy.musica SET id = '$idM',nome = '$nomeM',duracao = '$duracao' WHERE id = '$idM';";
    //"UPDATE deezefy.musica SET nome = '$nomeM',duracao = '$duracao' WHERE id = '$idM';";
    $sql2 = "UPDATE deezefy.grava SET Artista_email = '$email_Art',Musica_id = '$idM' WHERE Musica_id = '$idM';";

    if(mysqli_query($conexao,$sql1) and mysqli_query($conexao,$sql2)):
        $_SESSION['mensagemM'] = "Atualizado com sucesso!";
        header('Location: ../indexM.php');
        else:
            $_SESSION['mensagemM'] = "Erro ao atualizar";
            header('Location: ../indexM.php');
        endif;
    endif;
?>