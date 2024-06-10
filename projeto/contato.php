<?php

    $nome = addslashes($_POST{'nome'});
    $telefone = addslashes($_POST{'tel'});
    $mensagem = addslashes($_POST{'texto'});


    $para = "filipequeiroz196@gmail.com";
    $assunto = "Contato PQFA";

    $corpo = "Nome: ".$nome."\n"."Telefone: ".$tel."\n"."Mensagem: ".texto;

    $cabeca = "From: filipequeiroz196@hotmail.com"."Reply-to: ".$nome."\n"."X=Mailer:PHP/".phpversion();
    
    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }
    else{
        echo("Houve um erro ao enviar o e-mail");
    }
    
    
    ?>