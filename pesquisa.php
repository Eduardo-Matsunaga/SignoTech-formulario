<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa</title>
    <link rel="stylesheet" href="style.css">
    <script src="scripts.js"></script>
   
</head>
<body>

<?php 
include "conexao.php";
$sql ="SELECT cod,nome,telefone FROM usuarios";
$dados = mysqli_query($conn,$sql);
?>

    
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">NOME</th>
                <th scope="col">TELEFONE</th>
                <th scope="col">Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($linha = mysqli_fetch_assoc($dados)){
                    $cod_pessoa= $linha['cod'];
                    $nome= $linha['nome'];
                    $telefone=$linha['telefone'];

                    echo "<tr>
                    <th scope='row'>$cod_pessoa</th>
                    <td>$nome</td>
                    <td>$telefone</td>
                    <td width=150px> <a href='cadastro_edit.php?id=$cod_pessoa'>Editar</a>
                         <a href='excluir_script.php?id=$cod_pessoa'>Excluir</a>
                    </td>
                    </tr>";
                    }
                ?>
            </tbody>
        </table>
            <a href="index.html">Voltar</a>
     
  
            
   
    
    
    
</body>
</html>