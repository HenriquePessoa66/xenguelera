<script language="javaScript" type="text/javascript">
function checkDelete(){
    return confirm('Deseja continuar?');
}
</script>

<?php
    require './Modelo/ClassFornecedor.php';
    require './Modelo/DAO/ClassFornecedorDAO.php';

    $classFornecedorDAO = new ClassFornecedorDAO();
    $us = $classFornecedorDAO->listarfornecedores();

    echo "<table class='table'>";
    echo "  <tr>";
	echo "      <th scope='col'><p align='center'>Codigo</p></th> ";
    echo "      <th scope='col'><p align='center'>Nome</p></th> ";
    echo "      <th scope='col'><p align='center'>Email</p></th> ";
	echo "      <th scope='col'><p align='center'>CNPJ</p></th> ";
	echo "      <th scope='col'><p align='center'>Status</p></th> ";
    echo "      <th scope='col'><p align='center'>Exluir</p></th> ";
    echo "      <th scope='col'><p align='center'>Alterar</p></th>";
    echo "  <tr>";

    foreach ($us as $us) {
        echo "<tr>";
		echo "<td scope='col'><p align='center'>" . $us['codigo'] . "</p></td> ";
        echo "<td scope='col'><p align='center'>" . $us['nome'] . "</p></td>";
        echo "<td scope='col'><p align='center'>" . $us['email'] . "</p></td>";
		echo "<td scope='col'><p align='center'>" . $us['cnpj'] . "</p></td>";
		echo "<td scope='col'><p align='center'>" . $us['stts'] . "</p></td>";
            echo "<td scope='col'><a href='Controle/ControleFornecedor.php?ACAO=excluirFornecedor&idex=".$us["codigo"]."' onclick='return checkDelete()'><input type='button' name='excluir' id='excluir' value='excluir' class='btn btn-danger'></a></td>";
            echo "<td scope='col'><a href='Visao/FormAltFornecedor.php?idex=" . $us["codigo"] . "'><input type='button' value='alterar' class='btn btn-warning'></a></td>";
        echo "</tr>";
    }


