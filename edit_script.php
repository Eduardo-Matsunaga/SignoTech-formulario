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
    <div class="container">
        <div class="row">
            <?php 
                include "conexao.php";
                // Recupera os dados do formulário
                $id = $_POST['id'];
                $nome = $_POST["nome"];
                $endereco = $_POST["endereco"];
                $bairro = $_POST["bairro"];
                $cep = $_POST["cep"];
                $cidade = $_POST["cidade"];
                $uf = $_POST["uf"];
                $email = $_POST["email"];
                $telefone = $_POST["telefone"];
                $convite_Opcoes= isset($_POST["convite_Opcoes"]) ? $_POST["convite_Opcoes"] : '';
                
                $quantidade = $_POST["quantidade"];
                $atracoes = $_POST["atracoes"];
                $imagens = $_POST["imagens"];
                $sugestao = isset($_POST["Fsugestao"]) ? $_POST["Fsugestao"] : 'Não';


             

                if($convite_Opcoes=''){
                    $convite_Opcoes='nada';
                }

                $sql = "UPDATE usuarios set nome ='$nome', endereco='$endereco', bairro='$bairro', cep='$cep', cidade='$cidade', 
                uf='$uf', email='$email', telefone='$telefone', convite_Opcoes='$convite_Opcoes', quantidade='$quantidade', atracoes='$atracoes', 
                imagens='$imagens', sugestao='$sugestao' WHERE cod=$id";
               

               if( mysqli_query($conn,$sql)){
                echo "$nome Cadastro Atualizado";
               }else 
                echo "Nao foi cadastrado";

               

            
            ?>
           
           <a href="index.html">Voltar</a>
           <a href="pesquisa.php">Pesquisar</a> 
            </div>
    </div>
    
    
    
</body>
</html>