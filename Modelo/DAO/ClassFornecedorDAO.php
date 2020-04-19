<?php
require_once 'Conexao.php';
class ClassFornecedorDAO {

    public function cadastrar(ClassFornecedor $cadastrarFornecedor) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO fornecedor (nome, email, cnpj, stts) values (?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $cadastrarFornecedor->getNome());
            $stmt->bindValue(2, $cadastrarFornecedor->getEmail());
			$stmt->bindValue(3, $cadastrarFornecedor->getCNPJ());
			$stmt->bindValue(4, $cadastrarFornecedor->getStatus());
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function listarFornecedores() {
	    try {
		    $pdo = Conexao::getInstance();
		    $sql = "SELECT * FROM fornecedor";
		    $stmt = $pdo->prepare($sql);
		    $stmt->execute();
		    $fornecedores = $stmt->fetchAll(PDO::FETCH_ASSOC);
		    return $fornecedores;
	    } catch (PDOException $exc) {
		    echo $exc->getMessage();
		
	       }
	}
	public function excluirFornecedores($codigo) {
	    try {
		    $pdo = Conexao::getInstance();
		    $sql = "DELETE FROM fornecedor WHERE codigo =:codigo";
		    $stmt = $pdo->prepare($sql);
			$stmt->bindValue(':codigo',$codigo);
		    $stmt->execute();
		    return TRUE;
	}  catch (PDOException $exc) {
		echo $ex->getMessage();
	       }
	}	
   
}
