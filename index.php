<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="estilo.css">
    <script src="padrao_cards.js"></script>
    <?php require("conexao.php") ?>
    <title>Pagina inicial</title>
</head>
<body>
     <!-- cabeçalho -->
    <header>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class=" navbar-brand" href="#"><img src="Captura de tela 2026-03-10 010147.png "  alt=""></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success ms-auto" type="submit">Search</button>
        </form>
    </div>
    <div>
        <button class="ms-auto btn btn-outline-primary ms-auto"><a style="text-decoration: none;" href="login.php">Admin</a></button>      
    </div>
</div>
</nav>
</header>
<!-- corpo principal -->
<main>

    <!-- slide 1 -->
<div class="container  mt-4" style="max-width: 800px;"></div>
    <div id="meuCarrossel" class="carrousel slide" data-bs-ride="carousel">
     <div class="carousel-inner">

     <div class="carousel-item active">
        <img src="imagens/nvphp.png" class="d-block mx-auto" alt="curso 1">
           </div>

           <!-- slide 2 -->
            <div class="carousel-item">
        <img src="imagens/nvjs.png" class="d-block mx-auto" alt="curso 1">
           </div>

           <!-- slide 3 -->
            <div class="carousel-item">
        <img src="imagens/kt.png" class="d-block mx-auto" alt="curso 1">
           </div>  
     </div>
    </div>
</div>

  <!-- cursos -->
 <?php $resultado = mysqli_query($conn, "SELECT * FROM cursos ORDER BY id_curso DESC");
 ?>
  <hr class="my-5"> 
<div class="row">
    <?php 
    //  começa aqui: enquanto houver uma linha de curso, ele guarda em $curso
    while($curso = mysqli_fetch_assoc($resultado)): 
    ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="imagens/<?php echo $curso['foto']; ?>" class="card-img-top" style="height: 180px; object-fit: contain;">
                
                <div class="card-body">
                    <h5 class="fw-bold"><?php echo $curso['nome_curso']; ?></h5>
                </div>

                <div class="card-body border-top">
                    <h6 class="text-muted">Descrição</h6>
                    <p><?php echo $curso['decricao']; ?></p>
                </div>

                <div class="card-body border-top mt-auto">
                    <h6 class="text-muted">Valor</h6>
                    <p class="text-success fw-bold">R$ <?php echo number_format($curso['preco'], 2, ',', '.'); ?></p>
                    
                    <a href="confirmar_exclusao.php?id=<?php echo $curso['id_curso']; ?>" class="btn btn- btn-primary -sm w-100">
                        Comprar Agora 
                    </a>
                </div>
            </div>
        </div>
    <?php 
    //  para aqui e volta para o início até acabar os cursos
    endwhile; 
    ?>
</div>



</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>