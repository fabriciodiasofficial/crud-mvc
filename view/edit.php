<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
</head>
<body>
    <h2>Editar Usuário</h2>

    <!-- Formulário para Edição -->
    <form method="post" action="index.php">
        <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>">
        Nome: <input type="text" name="nome" value="<?php echo isset($nome) ? $nome : ''; ?>" required><br>
        Email: <input type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required><br>
        Telefone: <input type="text" name="telefone" value="<?php echo isset($telefone) ? $telefone : ''; ?>" required><br>
        <input type="submit" name="update" value="Atualizar">
    </form>
</body>
</html>
