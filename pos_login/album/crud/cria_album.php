<?php
    session_start();
    include_once '../Projeto/conexao.php';

    if(isset($_POST['btn-cadastrar'])):
        $titulo = mysqli_escape_string($conexao,$_POST['titulo']);
        $anoLancamento = mysqli_escape_string($conexao,$_POST['anoLancamento']);
        $emailAr = mysqli_escape_string($conexao,$_POST['emailAr']);




    $sql1 = "SELECT email FROM deezefy.artista WHERE email = '$emailAr'";
    $sql2 = "INSERT INTO deezefy.album VALUES(NULL,'$titulo','$anoLancamento','$emailAr')";
    //Verificando se foi possível o cadastro ou não
    //Dependendo da resposta do banco, aparece uma mensagem na página principal
    //caso tenha cadastrado ou não
    if(mysqli_query($conexao,$sql1) and mysqli_query($conexao,$sql2)):
        $_SESSION['mensagemAL'] = "Cadastrado com sucesso!";
        header('Location: ../indexAL.php');
        else:
            $_SESSION['mensagemAL'] = "Erro ao cadastrar";
            header('Location: ../indexAL.php');
        endif;
    endif;
?>