<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

  $name = addslashes($_POST['name']);
  $email = addslashes($_POST['email']);
  $subject = addslashes($_POST['subject']);
  $message = addslashes($_POST['message']);


  $to = "lucasgpgpae@gmail.com";
  $body = "Nome: ".$name."\r\n".
          "Email: ".$email."\r\n".
          "Mensagem: ".$message;
  $header = "From: contact@lucasgomespalmieri.tk"."\r\n".
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();

  if(mail($to,$subject,$body,$header)){
    header("Location: https://www.lucasgomespalmieri.tk/contactsent")
  }else{
    header("Location: https://www.lucasgomespalmieri.tk/contactnotsent");
  }

}
 ?>
