<?php
    session_start();
    include_once '../Projeto/conexao.php';
    

    if(isset($_POST['btn-deletar'])):
    $idAL = mysqli_escape_string($conexao,$_POST['id']);


    $sql1 = "DELETE FROM deezefy.album WHERE id = '$idAL';";

    if(mysqli_query($conexao,$sql1)):
        $_SESSION['mensagemAL'] = "Deletado com sucesso!";
        header('Location: ../indexAL.php');
        else:
            $_SESSION['mensagemAL'] = "Erro ao deletar!";
            header('Location: ../indexAL.php');
        endif;
    endif;
?>