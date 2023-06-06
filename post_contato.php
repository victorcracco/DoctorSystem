<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $to_email = 'victorcracco@gmail.com'; // Endereço de e-mail para onde enviar a mensagem
  $subject = 'Mensagem de contato'; // Assunto do e-mail

  // Extrai as informações do formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];

  // Monta o corpo da mensagem
  $body = "Nome: $nome\nE-mail: $email\nMensagem:\n$mensagem";

  // Envia o e-mail
  if (mail($to_email, $subject, $body)) {
    echo '<div class="alert alert-success" role="alert">Sua mensagem foi enviada com sucesso. Obrigado!</div>';
  } else {
    echo '<div class="alert alert-danger" role="alert">Ocorreu um erro ao enviar a mensagem. Tente novamente mais tarde.</div>';
  }
} else {
  // Se o método de requisição não for POST, redireciona de volta para a página de contato
  header('Location: index.php');
  exit;
}
?>
