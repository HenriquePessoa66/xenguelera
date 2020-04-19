<?php
require_once '../Modelo/ClassFornecedor.php';
require_once '../Modelo/DAO/ClassFornecedorDAO.php';

$codigo =@$_POST['idex'];
$nome = @$_POST['nome'];
$email = @$_POST['email'];
$cnpj = @$_POST['cnpj'];
$stts = @$_POST['stts'];
$acao = $_GET['ACAO'];


$novoFornecedor = new ClassFornecedor();
$novoFornecedor->setCodigo($id);
$novoFornecedor->setNome($nome);
$novoFornecedor->setEmail($email);
$novoFornecedor->setCNPJ($cnpj);
$novoFornecedor->setStatus($stts);

$classFornecedorDAO = new ClassFornecedorDAO();
switch ($acao) {
	case "cadastrarFornecedor":
        $fornecedor = $classFornecedorDAO->cadastrar($novoFornecedor);
	    if($fornecedor >= 1){
            header('Location:../index.php?&MSG= Cadastro realizado com sucesso!');
        } else {
            header('Location:../index.php?&MSG= Não foi possivel realizar o cadastro!');
        }
        break;
	case 'alterarFornecedor':
      break;
		
	case "excluirFornecedor":
	   if (isset($_GET['idex'])){
		   $codigo = $_GET['idex'];
		   $calssFornecedorDAO = new ClassFornecedorDAO();
		   $us = $classFornecedorDAO->excluirFornecedores($codigo);
		   if ($us == TRUE) {
			   header('Location:../index.php?PAGINA=listarFornecedor&MSG= Usuario foi excluido com sucesso!');
		   } else {
			   header('Location:../index.php?PAGINA=listarFornecedor$MSG=Não foi possivel realizar a exlusão do Usuario');
		   }
	   } 
        break;
    default :
        break;	
 }
?>
