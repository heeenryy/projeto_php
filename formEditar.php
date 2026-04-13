  <?php 
    session_start();
    require("protecao.php");
    require("conexao.php");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Edição</title>
</head>
<body>
    <?php 
    $id = $_GET['id'];

    $sql = mysqli_query($conn,"SELECT * FROM cursos WHERE id_curso = $id");
    
    $curso = mysqli_fetch_assoc($sql)
    ?>
    <div class="container mt-4">
    <div class="card p-4 shadow-sm">
        <h4>Editar Curso 🎓</h4>
        <form action="editar.php" method="POST">
            <input type="hidden" name="id_curso" value="<?php echo $curso['id_curso']; ?>">
            <input type="text" class="form-control mb-2" name="nome_curso" value="<?php echo $curso['nome_curso'] ?>" placeholder="Nome Do Curso">
            <input type="text" class="form-control mb-2" name="descricao" value="<?php echo $curso['decricao'] ?>" placeholder="Descrição">
            <input type="number" class="form-control mb-2" step="0.01" name="preco" value="<?php echo $curso['preco'] ?>" placeholder="Valor do curso">
            <input type="text" class="form-control mb-2" name="foto" value="<?php echo $curso['foto'] ?>" placeholder="Foto">

             <button type="submit" class="btn btn-warning">Editar Produto</button>
             <a href="sair.php" class="btn btn-primary">Voltar a Pagina Inicial?</a>
            </form>
    </div>

</body>
</html>