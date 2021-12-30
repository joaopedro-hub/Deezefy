<?php
    session_start();
    include_once '../Projeto/conexao.php';
    

    if(isset($_POST['btn-deletar'])):
    $idM = mysqli_escape_string($conexao,$_POST['id']);

    //Deleta primeiro na tabela grava e logo em seguida da tabela musica
    $sql1 = "DELETE FROM deezefy.grava WHERE Musica_id = '$idM';";
    $sql2 = "DELETE FROM deezefy.musica WHERE id = '$idM';";
    

    if(mysqli_query($conexao,$sql1) and mysqli_query($conexao,$sql2)):
        $_SESSION['mensagemM'] = "Deletado com sucesso!";
        header('Location: ../indexM.php');
        else:
            $_SESSION['mensagemM'] = "Erro ao deletar!";
            header('Location: ../indexM.php');
        endif;
    endif;
?>