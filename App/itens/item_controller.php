<?php

require_once 'conexao.php';
require_once 'models/Item.php';

class ItemController {
    private $model;

    public function __construct() {
        global $conexao;
        $this->model = new Item($conexao);
    }

    public function index() {
        $items = $this->model->listarTodos();
        require_once 'views/listar.php';
    }

    public function cadastrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->criar($_POST['title'], $_POST['description'], $_POST['url'], $_POST['type']);
            header('Location: index.php');
            exit;
        }
        require_once 'views/criar.php';
    }

    public function editar() {
        $id = $_GET['id'] ?? null;
        if (!$id) { header('Location: index.php'); exit; }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->atualizar($id, $_POST['title'], $_POST['description'], $_POST['url'], $_POST['type']);
            header('Location: index.php');
            exit;
        }

        $item = $this->model->buscarPorId($id);
        require_once 'views/editar.php';
    }

    public function excluir() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->model->deletar($id);
        }
        header('Location: index.php');
        exit;
    }
}
?>