
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    

    if ($nome && $email ) {
        $para = "arthur.resende.gomes02@gmail.com";
        $assunto = "Fale comigo - Portfolio";

        $corpo = "Nome: " . $nome . "\n" . "E-mail: " . $email . "\n" . "Telefone: " . $telefone;
        $cabeca = "From: arthur.resende.gomes1@gmail.com\n" . "Reply-to: " . $email . "\n" . "X-Mailer: PHP/" . phpversion();

        if (mail($para, $assunto, $corpo, $cabeca)) {
            echo("E-mail enviado com sucesso!");
        } else {
            echo("Houve um erro ao enviar o e-mail!");
        }
    } else {
        echo("Dados inválidos. Por favor, verifique suas entradas.");
    }
} else {
    echo("Método de requisição não permitido. Use o método POST.");
}
?>
