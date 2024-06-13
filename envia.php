<?php

if(isset($_POST['email']) && ! empty($_POST['nome'])){

$nome = addslashes($_POST['nome'])
$email = addslashes($_POST['email'])
$mensagem = addslashes($_POST['msg'])

$to = "arthur.resende.gomes02@gmail.com";
$subject = "Contato - gomes1";


$body = "Nome: ".$nome. "\n"
        "Email: ".$email. "\n"
        "Mensagem: ".$msg;
$header = "From: arthur.resende.gomes1@gmail.com"."\r\n". "Reply-To:"$email."\r\n" ."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)) {
    echo("Email enviado com sucesso");
}else{
    echo(O email não pode ser enviado);
}

}

?>



