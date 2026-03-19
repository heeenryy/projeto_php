<?php 
 session_start();
require("conexao.php");
require("protecao.php");

    $id_recebido = $_GET['id'];

    $sql = "DELETE FROM cursos WHERE id_curso = $id_recebido";

    if (mysqli_query($conn, $sql)) {
        header("Location: pgadm.php");
        exit();
    } else{
        echo "não foi possivel exclui". mysqli_error($conn);
    }














?>