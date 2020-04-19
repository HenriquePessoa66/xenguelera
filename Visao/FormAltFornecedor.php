<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        
            <h1>Formulario de atualização de Fornecedores</h1>
        <div class="col-md-4 mb-3">
            <hr>
        </div>
		<div class="col-md-4 mb-3">
        <?php
            require '../Modelo/ClassFornecedor.php';
            require '../Modelo/DAO/ClassFornecedorDAO.php';
			$id =@$_GET['idex'];
            $novoFornecedor = new ClassFornecedor();
            $fornecedorDAO = new ClassFornecedorDAO();
            $novoFornecedor = $fornecedorDAO->buscarFornecedor($id);

        ?>
        <form method="post" action="../Controle/ControleFornecedor.php?ACAO=alterarFornecedor" >
                <input type="hidden" name="idex" value="<?php echo $novoFornecedor->getCodigo(); ?>">
                Nome:<input class="form-control" type="text" name="nome" size="80" value="<?php echo $novoUsuario->getNome(); ?>" /><br>
                Email:<input class="form-control" type="email" id="email" name="email" size="80" value="<?php echo $novoFornecedor->getEmail(); ?>"/><br>
				CNPJ:<input class="form-control" type="text" name="cnpj" size="14" value="<?php echo $novoFornecedor->getCNPJ(); ?>" /><br>
				Status:<input class="form-control" type="number" name="stts" size="1" value="<?php echo $novoFornecedor->getStatus(); ?>" /><br>
                <br>
				<button class="btn btn-primary" type="submit" value="Alterar">Alterar</button> 
				<button class="btn btn-primary" type="reset" value="Limpar">Limpar</button>
            </div>
        </form>
    </body>
</html>
