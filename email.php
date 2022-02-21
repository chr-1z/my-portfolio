<?php

$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$mensagem =  addcslashes($_POST['message']);

function enviaEmail() {

if(isset($_POST['email']) && !empty($_POST['email'])){

    $to = $email;
    $subject = "Contato - Formulário";
    $body = "Nome: ".$nome. "\n"
            "Mensagem: ".$mensagem;
    $header = "From:chris99leichtweiss@gmail.com"."\r\n". 
                "Reply-To:".$email."\r\n". 
                "X=Mailer:PHP/".phpversion();
    
    if(mail($to, $subject, $body, $header)) {
        echo("Email enviado com sucesso!");
    } else {
        echo("O email não pode ser enviado!");
    }
}

?>