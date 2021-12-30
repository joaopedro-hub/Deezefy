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
    
    
    if(isset($_POST['btn-editar'])):
    $email = mysqli_escape_string($conexao,$_POST['email']);
    $senha = mysqli_escape_string($conexao,$_POST['senha']);
    $nomeArtistico = mysqli_escape_string($conexao,$_POST['nomeArtistico']);
    $biografia = mysqli_escape_string($conexao,$_POST['biografia']);
    $ano = mysqli_escape_string($conexao,$_POST['ano']);
    $data = mysqli_escape_string($conexao,$_POST['data']);
    $idEmail = mysqli_escape_string($conexao,$_POST['id']);


    $sql1 = "UPDATE deezefy.usuario SET email = '$email',senha = md5('$senha'),data_de_nascimento = '$data' WHERE email = '$idEmail';";
    $sql2 = "UPDATE deezefy.artista SET nome_artistico = '$nomeArtistico',biografia = '$biografia',ano_formacao = '$ano' 
    WHERE email = '$email';";

    if(mysqli_query($conexao,$sql1) and mysqli_query($conexao,$sql2)):
        $_SESSION['mensagemA'] = "Atualizado com sucesso!";
        header('Location: ../indexA.php');
        else:
            $_SESSION['mensagemA'] = "Erro ao atualizar";
            header('Location: ../indexA.php');
        endif;
    endif;
?>