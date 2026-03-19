<?php  session_start();
require("conexao.php");
require("protecao.php");  


    $id_recebido = $_POST['id_curso'];
    $nome_novo = $_POST['nome_curso'];
    $descr_novo = $_POST['descricao'];
    $preco_novo = $_POST['preco'];
    $foto_nova = $_POST['foto'];

    $sql = "UPDATE cursos set nome_curso = '$nome_novo', decricao = '$descr_novo', preco = '$preco_novo', foto = '$foto_nova' WHERE id_curso = $id_recebido";

    if (mysqli_query($conn,$sql)) {
        header('Location: pgadm.php');
        exit();
    } else {
        echo "Inposivel atualizar o curso erro: ". mysqli_errno($conn);
    }
    

?>