<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha"; 
        } else {

            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM paciente WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
    
            $quantidade = $sql_query->num_rows;

            if($quantidade == 1) {
            
                $usuario = $sql_query->fetch_assoc();
    
                if(!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['cpf'] = $usuario['cpf'];
                $_SESSION['telefone'] = $usuario['telefone'];


                header("Location: paciente/painel.php");
             }    else {
        echo "<div class='alert alert-danger' role='alert'>
         <center><i class='bi bi-exclamation-octagon'></i> Falha ao logar! E-mail ou senha incorretos.</center> 
        </div>";
    }
}
}



?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DoctorSystem ~ Painel de Controle</title>
    <link rel="icon" type="image/x-icon" href="/img/heart-pulse.svg"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
body {
	background: #eeeeee;
}
.login-form {
    width: 380px;
    margin: 200px auto;
  	font-size: 16px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
    color: #435d7d;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 20px;
    font-weight: bold;
}
</style>

  </head>
  <body>

  <div class="login-form">
    <center> <h1>Doctor<b>System </b><i class="bi bi-heart-pulse-fill"></i></h1></center>
    <br>

    <form action="" method="POST">
        <h2 class="text-center"> Acesse sua conta</h2>
        <div class="form-group">
            
            <input class="form-control" type="text" placeholder="E-mail" name="email">
        </div>
        <p>
        <div class="form-group">
            <input class="form-control" type="password" placeholder="Senha" name="senha">
        </div>
        <p>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
        </div>


        <a href="registrar.php" class="form-group btn btn-success btn-block" role="button" aria-pressed="true">Registrar-se</a>
        

    </form>
    <a href="index.php" class="text-dark font-italic">Voltar para a página principal</a>
    </div>

</body>
</html>