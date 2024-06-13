<?php

$nome = addslashes($_POST ['nome']);
$email = addslashes($_POST ['email']);
$telefone = addslashes($_POST ['telefone']);
$msg = addslashes($_POST ['msg']);

$para = "arthur.resende.gomes02@gmail.com";
$assunto = "Fale comigo - Portfolio";

$corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$msg;

$cabeca = "From: arthur.resende.gomes1@gmail.com"."\n"."Reply-to:".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail ($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
}else{
    echo("Houve um erro ao enviar o email!");
}

>

