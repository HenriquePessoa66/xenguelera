<?php
require_once '../Modelo/ClassFornecedor.php';
require_once '../Modelo/DAO/ClassFornecedorDAO.php';
require_once '../Modelo/DAO/Conexao.php';
class TesteCon {

    public function acessar() {
        try {
            $pdo = Conexao::getInstance();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}
  $a = new TesteCon;
  $a->acessar();
?>