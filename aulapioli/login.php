<?php
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    if ($login == "adimin" && $senha == "admin") {
        echo ("<script>window.location.replace('aluno.php');</script>");
    }
    else{
        echo("<script>window.location.replace('aluno.php');</script>");
        echo ("<script>window.location.replace('aluno.php');</script>");
    }
?>