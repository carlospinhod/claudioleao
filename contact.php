<html>
    <head><meta charset="utf-8"></head>
</html>
<?php

    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["message"];
    
   
//Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
echo "ainda não passei";
require_once("assets/php/class.phpmailer.php");
echo "passei";
// Inicia a classe PHPMailer
$mail = new PHPMailer();



// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "webmail.brightthoughts.pt"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->Username = 'carlos@brightthoughts.pt'; // Usuário do servidor SMTP
$mail->Password = 'cp12396'; // Senha do servidor SMTP



// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "criativo@claudioleao.pt"; // Seu e-mail
$mail->FromName = "Email do Site"; // Seu nome

// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('criativo@claudioleao.pt', 'Cláudio Leão');
//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Mensagem via site de $name";
$mail->Body = "$email<br><br> A mensagem é:<br> $comment <br><br> Enviada por - $name";
$mail->AltBody = "$email A mensagem é: $comment";

// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo

// Envia o e-mail
$enviado = $mail->Send();

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

 header('Location:index.php');
   

/*// Exibe uma mensagem de resultado
if ($enviado) {
    header( "refresh:5;url=http://www.sergiomartins.pt" );
    echo "<html lang=\"pt\">";  
   echo "<head>";
   echo  "<meta charset=utf-8>";
    echo  "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
    echo    "<title>Sérgio Martins</title>";
    echo   "<!-- Load Roboto font -->";
    echo    "<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>";
    echo    "<!-- Load css styles -->";
    echo    "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.css\" />";
    echo    "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap-responsive.css\" />";
    echo    "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\" />";
    echo   " <link rel=\"stylesheet\" type=\"text/css\" href=\"css/pluton.css\" />";
    echo    "<!--[if IE 7]>";
    echo        "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/pluton-ie7.css\" />";
    echo    "<![endif]-->";
    echo    "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/jquery.cslider.css\" />";
    echo    "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/jquery.bxslider.css\" />";
    echo    "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/animate.css\" />";
    echo   " <!-- Icons touch e favicon -->";
    echo    "<link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"images/ico/apple-touch-icon-144.png\">";
    echo   " <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"images/ico/apple-touch-icon-114.png\">";
    echo   " <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"images/apple-touch-icon-72.png\">";
    echo   " <link rel=\"apple-touch-icon-precomposed\" href=\"images/ico/apple-touch-icon-57.png\">";
    echo    "<link rel=\"shortcut icon\" href=\"images/ico/favicon.ico\"> </head>";
    echo "<body>";
    echo "<div class=\"section secondary-section\" id=\"service\">            <div class=\"container\">                <!-- título -->                <div class=\"title\">E-mail enviado com sucesso! Obrigado. Se não voltar à pagina dentro de 5 segundos, <a href=\"http://www.sergiomartins.pt\">clique aqui</a></div></div></div>";
    echo "</body>";
    echo "</html>";
    
} else {
  echo "Não foi possível enviar o e-mail.";
  echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
}
*/
?>