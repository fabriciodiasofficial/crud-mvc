<!-- index.php -->
<?php
require_once 'model/Conexao.php';
require_once 'model/UsuarioModel.php';
require_once 'controller/UsuarioController.php';

$conexaoObj = new Conexao();
$usuarioModel = new UsuarioModel($conexaoObj->getConexao());
$usuarioController = new UsuarioController($usuarioModel);

$usuarioController->processarFormulario();
$usuarios = $usuarioController->obterUsuarios();

include 'view/index.php';
?>
