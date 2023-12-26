<!-- controller/UsuarioController.php -->
<?php
class UsuarioController {
    private $usuarioModel;

    public function __construct($usuarioModel) {
        $this->usuarioModel = $usuarioModel;
    }

    public function processarFormulario() {
        if (isset($_POST['submit'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];

            $this->usuarioModel->criarUsuario($nome, $email, $telefone);
        }

        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];

            $this->usuarioModel->atualizarUsuario($id, $nome, $email, $telefone);
        }

        if (isset($_GET['delete'])) {
            $id = $_GET['delete'];
            $this->usuarioModel->excluirUsuario($id);
        }

        if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $usuario = $this->usuarioModel->obterUsuarioPorId($id);

            // Preencher o formulário de edição
            $nome = $usuario['nome'];
            $email = $usuario['email'];
            $telefone = $usuario['telefone'];

            // Carregar a view de edição
            include 'view/edit.php';
            exit();  // Para evitar a execução do restante do código
        }
    }

    public function obterUsuarios() {
        return $this->usuarioModel->obterUsuarios();
    }
}
?>

