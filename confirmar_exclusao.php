<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();
    require("conexao.php");
    require("protecao.php");

    $id_recebido = $_GET['id'];

    $sql = "SELECT * FROM cursos WHERE id_curso = $id_recebido";

    // 1. Executamos a consulta
    $objetos = mysqli_query($conn,$sql);

    // 2. Transformamos o resultado em um array (aqui está o segredo!)
    $cursos = mysqli_fetch_assoc($objetos);
     
    // 3. Agora acessamos os dados pelas etiquetas (nomes das colunas)
    ?>
   <div class="alert alert-warning">
    <h4>Atenção! ⚠️</h4>
    <p>Você tem certeza que deseja excluir o curso: <strong><?php echo $cursos['nome_curso']; ?></strong>?</p>
    
    <a href="excluir_curso.php?id=<?php echo $cursos['id_curso']; ?>" class="btn btn-danger">
        Sim, excluir agora 🗑️
    </a>

    <a href="pgadm.php" class="btn btn-secondary">
        Não, voltar ao painel ✋
    </a>
</div>
</body>
</html>
