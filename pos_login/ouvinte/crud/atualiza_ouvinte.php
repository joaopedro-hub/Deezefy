<?php
    session_start();
    include_once '../Projeto/conexao.php';

    

    if(isset($_POST['btn-editar'])):
    $email = mysqli_escape_string($conexao,$_POST['email']);
    $senha = mysqli_escape_string($conexao,$_POST['senha']);
    $data = mysqli_escape_string($conexao,$_POST['data']);
    $idade = mysqli_escape_string($conexao,$_POST['idade']);
    $pri_nome = mysqli_escape_string($conexao,$_POST['pri_nome']);
    $sobrenome = mysqli_escape_string($conexao,$_POST['sobrenome']);
    $idEmail = mysqli_escape_string($conexao,$_POST['id']);


    $sql1 = "UPDATE deezefy.usuario SET email = '$email',senha = md5('$senha'),data_de_nascimento = '$data',idade = '$idade' WHERE email = '$idEmail';";
    $sql2 = "UPDATE deezefy.ouvinte SET primeiro_nome = '$pri_nome',sobrenome = '$sobrenome' WHERE email = '$email';";

    if(mysqli_query($conexao,$sql1) and mysqli_query($conexao,$sql2)):
        $_SESSION['mensagemO'] = "Atualizado com sucesso!";
        header('Location: ../indexO.php');
        else:
            $_SESSION['mensagemO'] = "Erro ao atualizar";
            header('Location: ../indexO.php');
        endif;
    endif;
?>