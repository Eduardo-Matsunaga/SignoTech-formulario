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

                use PHPMailer\PHPMailer\PHPMailer;
                use PHPMailer\PHPMailer\SMTP;
                use PHPMailer\PHPMailer\Exception;

                
                require 'vendor/autoload.php';

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
                    if(isset($_POST['enviar'])){

                        
            

                    
                        $mail = new PHPMailer(true);
    
                        try {
                            //Server settings
                            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
                            $mail->isSMTP();                                            
                            $mail->Host       = 'smtp.gmail.com';                     
                            $mail->SMTPAuth   = true;                                  
                            $mail->Username   = 'eduardomatsunagadev@gmail.com';                     
                            $mail->Password   = 'senha do app';                               
                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
                            $mail->Port       = 465;                                    
    
                            //Recipients
                            $mail->setFrom('eduardomatsunagadev@gmail.com', 'Eduardo Matsunaga');
                            $mail->addAddress('davi@signotech.com.br;', 'Davi');                   
                            $mail->addReplyTo('eduardomatsunagadev@gmail.com', 'Information');
    
    
                            //Content
                            $mail->isHTML(true);                                  
                            $mail->Subject = 'Teste Estagio Dev - 010/2023';
                            $msg =  "GitHub: https://github.com/Eduardo-Matsunaga/SignoTech-formulario<br>
                                     Nome: ".$_POST["nome"]." <br/>
                                     Email: ".$_POST["email"]."<br>
                                     Telefone: ".$_POST["telefone"];
                                   
    
                            $mail->Body    = $msg;
                            $mail->AltBody = 'GitHub: https://github.com/Eduardo-Matsunaga/SignoTech-formulario';
    
                            $mail->send();
                            echo 'Cadastro realizado com sucesso e email enviado para davi@signotech.com.br ';
                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        }
                    }
                } else{
                    echo "Erro ao cadastrar";
                }
                                                                                       
                  
            ?>
           
           
            </div>
    </div>
    
    
    
</body>
</html>