<?php 
session_start(); // inicio da sessão 
include("conexao.php"); //Puxa o arquivo de conexão com o banco 

$usuario_digitado = $_POST['usuario'];
$senha_digitada = $_POST['senha'];

// seguraça contra sql injection. Prepared Statement

$stmt = $conn->prepare( "SELECT * FROM adm WHERE usuario = ?"); // preparação da query com um 'burado' nela usando '?' (placeholder) 
$stmt->bind_param("s", $usuario_digitado); // aqui preenche o '?' com o valor real e o "s" diz o tipo de dado (string)
$stmt->execute(); // aqui a query é enviada e executada no banco de dados com o valor real no lugar do '?'

$result = $stmt->get_result(); // aqui pega o resultado da consulta
$adm = $result->fetch_assoc(); // aqui o método pega a primeira linha do resultado e transforma em array associativa



if ($adm) {
    
   if (password_verify($senha_digitada, $adm['senha']))
    {
        $_SESSION['adm'] = $adm['usuario'];

        header("Location: pgadm.php");
       exit();

    } else{
        
        header("Location: login.php?erro=senha");
        exit();
    };

} else {

    
    header("Location: login.php?erro=usuario");
    exit(); 
}
?>