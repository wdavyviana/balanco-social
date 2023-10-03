<?

# alterar a variavel abaixo colocando o seu email

$destinatario = "marketing@cortezibiapina.com.br";

$nome = $_REQUEST['name'];
$email = $_REQUEST['email'];
$numero = $_REQUEST['number'];


 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - TESTE COMPROVATIVO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Numero: " . $numero . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("https://wa.me/5555859940285");


?>