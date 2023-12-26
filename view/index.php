<!-- view/index -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD em PHP com MVC</title>
</head>
<body>
    <h2>CRUD em PHP com MVC</h2>

    <!-- Formulário para Create e Update -->
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>">
        Nome: <input type="text" name="nome" value="<?php echo isset($nome) ? $nome : ''; ?>" required><br>
        Email: <input type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required><br>
        Telefone: <input type="text" name="telefone" value="<?php echo isset($telefone) ? $telefone : ''; ?>" required><br>
        <?php if (isset($id)): ?>
            <input type="submit" name="update" value="Atualizar">
        <?php else: ?>
            <input type="submit" name="submit" value="Cadastrar">
        <?php endif; ?>
    </form>

    <!-- Tabela para Read -->
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo $usuario['id']; ?></td>
                    <td><?php echo $usuario['nome']; ?></td>
                    <td><?php echo $usuario['email']; ?></td>
                    <td><?php echo $usuario['telefone']; ?></td>
                    <td>
                        <a href="index.php?delete=<?php echo $usuario['id']; ?>">Excluir</a>
                        <a href="index.php?edit=<?php echo $usuario['id']; ?>">Editar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
