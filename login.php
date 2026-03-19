<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
    <title>Login</title>
</head>
<body>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow" style="width: 25rem;">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">Acesso Administrativo 🔐</h3>
            
            <form action="valida_login.php" method="POST">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuário</label>
                    <input type="text" name="usuario" class="form-control" id="usuario" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" name="senha" class="form-control" id="senha" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Entrar</button>
            </form>
            
            <div class="text-center mt-3">
                <a href="index.php" class="text-muted small">Voltar para o site</a>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>