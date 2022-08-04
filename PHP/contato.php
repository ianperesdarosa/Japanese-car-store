<?php

    if(isset($_POST['email']) && !empty($_POST['email'])){


    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $msg = addcslashes($_POST['msg']);

    $to = "JDMcarShopJP.com";
    $subject = "Contato - JDMcarShop";
    $body = "Nome: ".$nome. "\r\n. E-mail: ".$email. "\r\n. Mensagem: ".$msg;


    $header = "From: ianperesdarosa2004@gmail.com"."\r\n"."Reply-To:".$email."\e\n"."X=Mailer:PHP/".phpversion();



    if(mail($to, $subject, $body, $header)){

        echo "Mensagem enviada com sucesso!";
    }
    else{

        echo "Erro ao enviar mensagem!";
    }

}

?>