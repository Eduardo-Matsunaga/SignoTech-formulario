<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
    <script src="scripts.js"></script>
   
</head>
<body>
    <div class="container">
        <div class="row">
            <a href="index.html">Voltar</a><br>
            <a href="pesquisa.php">Pesquisar</a> <br>
            <?php 
                include "conexao.php";
                // Recupera os dados do formulário
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

                $sql = "INSERT INTO usuarios (nome, endereco, bairro, cep, cidade, uf, email, telefone, convite_Opcoes, quantidade, atracoes, imagens, sugestao)
                VALUES ('$nome', '$endereco', '$bairro', '$cep', '$cidade', '$uf', '$email', '$telefone', '$convite_Opcoes', '$quantidade', '$atracoes', '$imagens', '$sugestao')";

                if (mysqli_query($conn, $sql)) {
                    // Enviar email de confirmação
                    $to = "eduardomatsunagadev@gmail.com";
                    $subject = "Teste Estágio Dev - 010/2023";
                    $message = "https://www.linkedin.com/in/eduardo-matsunaga-2a11191b3/\n\nSeu cadastro foi realizado com sucesso!\n\nDetalhes do cadastro:\n\nNome: $nome\nEmail: $email\nTelefone: $telefone";
                    $headers = "From: eduardomatsunagadev@gmail.com";
                    
                    
                    if (mail($to, $subject, $message, $headers)) {
                        echo "Cadastro realizado com sucesso! Um email de confirmação foi enviado para $email.";
                        exit;
                    } else {
                        echo "Cadastro realizado com sucesso, mas houve um erro ao enviar o email de confirmação.";
                    }
                    exit;
                } else {
                    echo "Erro ao cadastrar: " . mysqli_error($conn);
                }
               

            
            ?>
           
           
            </div>
    </div>
    
    
    
</body>
</html>