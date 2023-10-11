<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Cadastro</title>
    <link rel="stylesheet" href="style.css">
    <script src="scripts.js"></script>
   

</head>
<body>

<?php 
    include "conexao.php";
    $id =$_GET['id'] ?? '';
    $sql= "SELECT *FROM usuarios WHERE cod=$id";

    $dados= mysqli_query($conn,$sql);
    $linha =mysqli_fetch_assoc($dados);

?>
    
    <form action="edit_script.php" method="POST" id="formulario">
        <h2>DADOS PARA ENTREGA</h2>
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required value="<?php echo $linha['nome']; ?>"><br><br>

        <label for="endereco">Endereço:</label><br>
        <input type="text" id="endereco" name="endereco"  value="<?php echo $linha['endereco']; ?>"><br><br>

        <label for="bairro">Bairro:</label><br>
        <input type="text" id="bairro" name="bairro"  value="<?php echo $linha['bairro']; ?>"><br><br>

        <label for="cep">CEP:</label><br>
        <input type="text" id="cep" name="cep"  value="<?php echo $linha['cep']; ?>"> <br><br>

        <label for="cidade">Cidade:</label><br>
        <input type="text" id="cidade" name="cidade"  value="<?php echo $linha['cidade']; ?>"> <br><br>

        <label for="uf">UF:</label><br>
        <input type="text" id="uf" name="uf" maxlength="2"  value="<?php echo $linha['uf']; ?>"><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" onblur="validaEmail()" onfocus="redefinirMsg()" required  value="<?php echo $linha['email']; ?>"> 
        <span id="error-email"></span>
        <br><br>
       

        <label for="telefone">Telefone:</label><br>
        <input type="text" id="telefone" name="telefone" required  value="<?php echo $linha['telefone']; ?>"><br><br>

        <h2>DADOS PARA PRODUÇÃO</h2>
        <label for="revistinha">Tipo Revistinha: </label><br>
        <input type="radio" name="convite_Opcoes" value="convite"  value="<?php echo $linha['convite_Opcoes']; ?>">Convite
        <input type="radio" name="convite_Opcoes" value="lembraca" value="<?php echo $linha['convite_Opcoes']; ?>">Lembrança
        <input type="radio" name="convite_Opcoes" value="convite-lembraca" value="<?php echo $linha['convite_Opcoes']; ?>">Convite-Lembrança</br><br>
        
        <label for="quantidade">Quantidade:</label><br>
        <input type="number" id="quantidade" name="quantidade" value="<?php echo $linha['quantidade']; ?>"><br><br>

        <label>Atrações do evento</label><br>
        <textarea style="height: 150px;" placeholder="Digite aqui" name="atracoes"><?php echo $linha['atracoes']; ?></textarea><br><br>

        
       
        <label for="imagens">Imagens:</label><br>
        <input type="file" name="imagens" /><br><br>
        
        <div class="sugestao">
        <input type="checkbox" name="Fsugestao" value="<?php echo $linha['sugestao']; ?>"/>
        <label for="Fsugestao" style="font-size: small;">Aceito sugestões de texto para a capa!</label><br>
        </div>
        
        <input type="submit" value="Salvar Alterações ">
        <input type="hidden" name="id" value = "<?php echo $linha['cod']; ?>">
        <a href="pesquisa.php">Pesquisar</a> 
    </form>

    
    
</body>
</html>