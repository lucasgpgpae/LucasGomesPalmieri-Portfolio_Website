<?php

  $name = addslashes($_POST['name']);
  $email = addslashes($_POST['email']);
  $subject = addslashes($_POST['subject']);
  $message = addslashes($_POST['message']);


  $to = "lucasgomespalmieri@hotmail.com";
  $body = "Nome: ".$name."\r\n".
          "Email: ".$email."\r\n".
          "Assunto: ".$subject."\r\n".
          "Mensagem: ".$message;
  $header = "From: contact@lucasgomespalmieri.com.br"."\r\n".
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();

  if($name == null || $email == null || $message == null || $subject == null){
    header("Location: https://www.lucasgomespalmieri.com.br/contactmissinginformation/");
  }
  else{

    if(mail($to,$subject,$body,$header)){
      header("Location: https://www.lucasgomespalmieri.com.br/contactsent/");
    }
    else{
      header("Location: https://www.lucasgomespalmieri.com.br/contactnotsent/");
    }

  }

 ?>
