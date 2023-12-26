<!-- model/Conexao.php -->
<?php
class Conexao {
    private $host = 'localhost';
    private $user = 'root';
    private $senha = '';
    private $banco = 'mvc';
    private $conexao;

    public function __construct() {
        try {
            $this->conexao = new PDO("mysql:host=$this->host;dbname=$this->banco", $this->user, $this->senha);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }

    public function getConexao() {
        return $this->conexao;
    }
}
?>

