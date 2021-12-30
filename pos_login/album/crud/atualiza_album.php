<?php
    session_start();
    include_once '../Projeto/conexao.php';

    

    if(isset($_POST['btn-editar'])):
    $titulo = mysqli_escape_string($conexao,$_POST['titulo']);
    $ano_de_lancamento = mysqli_escape_string($conexao,$_POST['ano_de_lancamento']);
    $Artista_email = mysqli_escape_string($conexao,$_POST['Artista_email']);
    $idAL = mysqli_escape_string($conexao,$_POST['id']);

    $sql1 = "SELECT email FROM deezefy.artista WHERE email = '$Artista_email'";
    $sql2 = "UPDATE deezefy.album SET titulo = '$titulo',ano_de_lancamento = '$ano_de_lancamento',Artista_email = '$Artista_email' WHERE id = '$idAL';";

    if(mysqli_query($conexao,$sql1) and mysqli_query($conexao,$sql2)):
        $_SESSION['mensagemAL'] = "Atualizado com sucesso!";
        header('Location: ../indexAL.php');
        else:
            $_SESSION['mensagemAL'] = "Erro ao atualizar";
            header('Location: ../indexAL.php');
        endif;
    endif;
?>