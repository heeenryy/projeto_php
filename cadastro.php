<?php 
    session_start();
    require("protecao.php"); // Garante que é o Admin
    require("conexao.php"); // Abre a porta do banco de dados

    $nome = $_POST['nome_curso'];
    $descr = $_POST['descricao'];
    $preco = $_POST['preco'];
    $foto = $_POST['foto'];

    $sql = "INSERT INTO cursos (nome_curso,decricao,preco,foto) VALUES ('$nome','$descr','$preco','$foto')";

    if (mysqli_query($conn,$sql)) {
       
    } else {
         echo "Erro ao cadastror:" . mysqli_error($conn);
    }
    mysqli_close($conn);
    header("Location: pgadm.php");
?>