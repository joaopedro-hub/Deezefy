<?php
    session_start();
    include_once '../Projeto/conexao.php';

    if(isset($_POST['btn-cadastrar'])):
        $codM = mysqli_escape_string($conexao,$_POST['codM']);
        $nomeM = mysqli_escape_string($conexao,$_POST['nomeM']);
        $duracao = mysqli_escape_string($conexao,$_POST['duracao']);
        $emailAr = mysqli_escape_string($conexao,$_POST['emailAr']);
        

    $sql1 = "SELECT email FROM deezefy.artista WHERE email = '$emailAr'";
    $sql2 = "INSERT INTO deezefy.musica VALUES('$codM','$nomeM','$duracao');";
    $sql3 = "INSERT INTO deezefy.grava (Artista_email,Musica_id) VALUES('$emailAr','$codM')";   
    

    //Verificando se foi possível o cadastro ou não
    //Dependendo da resposta do banco, aparece uma mensagem na página principal
    //caso tenha cadastrado ou não
    if(mysqli_query($conexao,$sql1) and mysqli_query($conexao,$sql2) and mysqli_query($conexao,$sql3)):
        $_SESSION['mensagemM'] = "Cadastrado com sucesso!";//"Cadastrado com sucesso!"
        header('Location: ../indexM.php');
        else:
            $_SESSION['mensagemM'] = "Erro ao cadastrar";//"Erro ao cadastrar"
            header('Location: ../indexM.php');
        endif;
    endif;
?>