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

    if(isset($_POST['btn-cadastrar'])):
    $email = mysqli_escape_string($conexao,$_POST['email']);
    $senha = mysqli_escape_string($conexao,$_POST['senha']);
    $nomeArtistico = mysqli_escape_string($conexao,$_POST['nomeArtistico']);
    $biografia = mysqli_escape_string($conexao,$_POST['biografia']);
    $ano = mysqli_escape_string($conexao,$_POST['ano']);
    $data = mysqli_escape_string($conexao,$_POST['data']);

    //Calculando da idade;
    $rest = substr($data, -4);
    $idade = 2021 - intval($rest);

    $sql1 = "INSERT INTO deezefy.usuario VALUES('$email',md5('$senha'),'$data','$idade')";
    $sql2 = "INSERT INTO deezefy.artista VALUES('$email','$nomeArtistico','$biografia','$ano')";

    if(mysqli_query($conexao,$sql1) and mysqli_query($conexao,$sql2)):
        $_SESSION['mensagemA'] = "Cadastrado com sucesso!";
        header('Location: ../indexA.php');
        else:
            $_SESSION['mensagemA'] = "Erro ao cadastrar";
            header('Location: ../indexA.php');
        endif;
    endif;
?>