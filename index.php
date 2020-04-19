<?php
    $msg =@$_GET['MSG'];
    if($msg != null || $msg != ''){
        echo "<script>alert('$msg')</script>";
    }
    
    echo "</div>";
    ?>
    <html>
        <head>
            <title></title>
        </head>
        <body>
           
                    <h1 align="center">Cadastro de fornecedores </h1>
          
                    <?php 
                   
                    include 'Visao/FormCadFornecedor.php';
					include 'Visao/ListarFornecedor.php';
				
                    ?>
                               
                    
                       
                
    </body>
</html>
