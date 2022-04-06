<?php
  $nome = htmlspecialchars($_POST['nome']);
  $email = htmlspecialchars($_POST['email']);
  $numero = htmlspecialchars($_POST['numero']);
  $website = htmlspecialchars($_POST['website']);
  $mensagem = htmlspecialchars($_POST['mensagem']);

  if(!empty($email) && !empty($mensagem)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "r17.ronald17@gmail.com";
      $subject = "From: $nome <$email>";
      $body = "Nome: $nome\nEmail: $email\nNumero: $numero\nWebsite: $website\n\nMensagem:\n$mensagem\n\nRegards,\n$nome";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Sua mensagem foi enviada.";
      }else{
         echo "Desculpe, falha ao enviar mensagem!";
      }
    }else{
      echo "Digite um email válido!";
    }
  }else{
    echo "Digite o email e a mensagem!";
  }
?>