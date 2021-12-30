<?php
    session_start();
    require_once '../Projeto/conexao.php';

    if(isset($_POST['btn_cadas_ouvinte'])):

        $email = mysqli_escape_string($conexao,$_POST['email']);
        $senha = mysqli_escape_string($conexao,$_POST['senha']);
        $data = mysqli_escape_string($conexao,$_POST['data']);
        $prim_nome = mysqli_escape_string($conexao,$_POST['pri_nome']);
        $sobre = mysqli_escape_string($conexao,$_POST['sobrenome']);

    //Calculando da idade;
    $rest = substr($data, -4);
    $idade = 2021 - intval($rest);

    $sql1 = "INSERT INTO deezefy.usuario VALUES('$email',md5('$senha'),'$data','$idade')";
    $sql2 = "INSERT INTO deezefy.ouvinte VALUES('$email','$prim_nome','$sobre')";
    
    //Verificando se foi possível o cadastro ou não
    //Dependendo da resposta do banco, aparece uma mensagem na página principal
    //caso tenha cadastrado ou não
    if(mysqli_query($conexao,$sql1) and mysqli_query($conexao,$sql2)):
        $_SESSION['mensagemS'] = "Cadastrado com sucesso!";
        header('Location: ../index.php');
        exit();
        else:
            $_SESSION['mensagemE'] = "Erro ao cadastrar";
            header('Location: ../index.php');
            exit();
        endif;
    endif;
?>