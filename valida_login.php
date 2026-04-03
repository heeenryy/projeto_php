<?php 
session_start();
include("conexao.php");

$usuario_digitado = $_POST['usuario'];
$senha_digitada = $_POST['senha'];

$stmt = $conn->prepare( "SELECT * FROM adm WHERE usuario = ?");
$stmt->bind_param("s", $usuario_digitado);
$stmt->execute();

$result = $stmt->get_result();
$adm = $result->fetch_assoc();



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

    
    echo "adm não encontrado";
    exit(); 
}






?>