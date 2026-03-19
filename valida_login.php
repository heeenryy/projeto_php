<?php 
session_start();
include("conexao.php");
$usuario_digitado = $_POST['usuario'];
$senha_digitada = $_POST['senha'];
// 1 validação 
if ($usuario_digitado == "admin" && $senha_digitada == "123") {
    // 2. Criar o crachá na sessão (dizer que está logado)
    $_SESSION['logado'] = true;
    // 3. Mandar para a página de administração
    header("Location: pgadm.php");
    exit(); //  Para tudo e vai para a página do admin
} else {
    // 4. Mandar de volta para o login porque errou
    header("Location: login.php");
    exit(); //  Para tudo e volta para o login
}



?>