<?php

$nome = addslashes($_POST('nome'));
$email = addslashes($_POST('email'));
$telefone = addslashes($_POST('telefone'));

$para = "arthur.resende.gomes02@gmail.com";
$assunto = "Coleta de dados - Portfolio";

$corpo = "Nome: ".$nome."\n"."E-mail :".$email."\n"."Telefone: ".$telefone;

$cabeca = "From: arthur.resende.gomes01@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
}
else{
    echo("E-mail não enviado!");
}

?>