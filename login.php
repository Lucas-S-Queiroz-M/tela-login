<?php
session_start();
    $usuario = 'lucas@cesmac.com.br';
    $senha = 123456;

    if($_POST['usuario'] == "lucas@cesmac.com.br" && $_POST['senha'] == 123456){
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        echo "<h1> Usuário: $usuario </h1><br/> <h3>Logado com sucesso! </h3>";
    }
    else{
        $_SESSION['nao_autenticado'] = true;
        header('location: index.php');
        
    }

?>