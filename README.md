# SignoTech-formulario
Formulario Simples com recursos do xampp

!!!!ATENÇÃO!!!! !!!!ATENÇÃO!!!! !!!!ATENÇÃO!!!!

Recursos necessários

-Xampp

-Editor de texto(VS,Sublime) Tested

Ative o Apache e o MySQL no Xampp Control Panel

Agora no navegador http://localhost/phpmyadmin/
-Crie um banco de dados "signotech" e a tabela "usuarios" com 14 campos:

colação: utf8_unicode_ci

cod int(11) AUTO_INCREMENT

nome varchar(200)

endereco varchar(200)

bairro varchar(50)

cep varchar(10)

cidade varchar(20)

uf int(10)

email varchar(255)

telefone varchar(20)

convite_Opcoes varchar(50)

quantidade int(11)

atracoes varchar(400)

imagens varchar(255)

sugestao varchar(200)

-Coloque o projeto em C:\xampp\htdocs\ em uma pasta chamada "signotech"

-Agora no navegador http://localhost/signotech/index.html

-Para função email funcionar va até https://myaccount.google.com/u/4/security?hl=en ative a autentificação de 2 fatores 
-Após va para https://myaccount.google.com/u/4/signinoptions/two-step-verification?rapt=AEjHL4NeACoaNz68cv-PrCluU_3Sc7fcemqfOYiJKQY7jNj8kPA7HWOMU1Qsq7LbSFYexV3W74gTclqM5yH301x44Bih2PO-ag
-Crie uma senha de app e substitua em cadastro_script.php $mail->Password e coloque seu email em  $mail->Username e tambem em  $mail->setFrom
