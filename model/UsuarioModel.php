<!-- UsuarioModel.php -->
<?php
class UsuarioModel {
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function criarUsuario($nome, $email, $telefone) {
        $sql = "INSERT INTO usuarios (nome, email, telefone) VALUES (:nome, :email, :telefone)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->execute();
    }

    public function obterUsuarios() {
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->conexao->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obterUsuarioPorId($id) {
        $sql = "SELECT * FROM usuarios WHERE id=:id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizarUsuario($id, $nome, $email, $telefone) {
        $sql = "UPDATE usuarios SET nome=:nome, email=:email, telefone=:telefone WHERE id=:id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function excluirUsuario($id) {
        $sql = "DELETE FROM usuarios WHERE id=:id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
?>



