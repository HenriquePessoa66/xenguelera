<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        
            <h1>Formulario de cadastro de Fornecedores</h1>
        <div class="col-md-4 mb-3">
            <hr>
        </div>
		<div class="col-md-4 mb-3" >
        <form method="post" action="./Controle/ControleFornecedor.php?ACAO=cadastrarFornecedor" >
				<br>
                Nome:<input class="form-control" type="text" name="nome" maxlength="80" placeholder="Digite o nome" />
                <br>
				
                <br>
				Email:<input class="form-control" type="email" id="email" name="email" maxlength="80" placeholder="Digite o email"/>
                <br>
				
				<br>
                CNPJ:<input class="form-control" type="text" name="cnpj" maxlength="14" placeholder="Digite o CNPJ" />
                <br>
				
                <button class="btn btn-primary" type="submit" value="Registrar">Cadastrar</button> 
				<button class="btn btn-primary" type="reset" value="Limpar">Limpar</button>
            </div>
        </form>
    </body>
</html>
