<?php

include('conexao.php');

if(isset($_POST['submit']))
{

  $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
  $data_nasc = mysqli_real_escape_string($mysqli, $_POST['data_nasc']);
  $sexo = mysqli_real_escape_string($mysqli, $_POST['sexo']);
  $cpf = mysqli_real_escape_string($mysqli, $_POST['cpf']);
  $sus = mysqli_real_escape_string($mysqli, $_POST['sus']);
  $email = mysqli_real_escape_string($mysqli, $_POST['email']);
  $senha = mysqli_real_escape_string($mysqli, $_POST['senha']);
  $cep = mysqli_real_escape_string($mysqli, $_POST['cep']);  
  $estado = mysqli_real_escape_string($mysqli, $_POST['estado']);
  $cidade = mysqli_real_escape_string($mysqli, $_POST['cidade']);
  $endereco = mysqli_real_escape_string($mysqli, $_POST['endereco']);
  $telefone = mysqli_real_escape_string($mysqli, $_POST['telefone']);

  $result = mysqli_query($mysqli, "INSERT INTO paciente (nome,data_nasc,sexo,cpf,sus,email,senha,cep,estado,cidade,endereco,telefone) 
  VALUES ('$nome','$data_nasc','$sexo', '$cpf', '$sus', '$email', '$senha', '$cep', '$estado', '$cidade', '$endereco', '$telefone')");
    }


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DoctorSystem - Sistema de gerenciamento de consultorios.</title>
  <link rel="icon" type="image/x-icon" href="/img/heart-pulse.svg"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <center>
                <h1>Doctor<b>System </b><i class="bi bi-heart-pulse-fill"></i></h1>
            </center>
            <br>
            <h1>Cadastre-se</h1>
            <br>
            <form action="registrar.php" method="POST" onsubmit="return validarFormulario()">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="validationCustom01">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="validationCustom02">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data_nasc" id="data_nasc" placeholder="data" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Sexo</label>
                        <select class="custom-select my-1 mr-sm-2" name="sexo" id="sexo">
                            <option selected>Escolher...</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="validationCustom01">CPF</label>
                        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="___.___.___-__" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Cartão Nacional de Saude - CNS</label>
                        <input type="text" class="form-control" name="sus" id="sus" placeholder="_________________" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="validationCustom01">Telefone</label>
                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="__ - _ ____-____" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="validationCustom01">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="nome@exemplo.com.br" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="validationCustom02">Senha</label>
                        <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
                    </div>
                </div>

                  <div class="form-row">
                         <div class="col-md-6 mb-3">
                       <label for="validationCustom03">CEP</label>
                           <input type="text" class="form-control" name="cep" id="cep" placeholder="_____-___" required>
                         </div>
                <div class="col-md-6 mb-3">
                             <label for="validationCustom03">Estado</label>
                           <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado" required>
                                            </div>

                                           <div class="col-md-6 mb-3">
                                                    <label for="validationCustom04">Cidade</label>
                              <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" required>
                                                                 </div>
                                <div class="col-md-6 mb-3">
                         <label for="validationCustom05">Endereço</label>
                                        <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço" required>
                                      </div>
                          </div>

                               <div class="form-group">
                                                        <div class="form-check">
                                           <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                                                   <label class="form-check-label" for="invalidCheck">
                           Concordo com os <a class="text-decoration-none"href="termos.php" target="_blank" ><b> termos e condições </b></a>
                               </label>
                           <div class="invalid-feedback">
                          Você deve concordar, antes de continuar.
                                </div>
                                                                                          </div>
                                </div>


                       <button type="submit" name="submit" class="btn btn-primary">Registrar</button>
                          <a href="index.php" class="text-dark font-italic">Voltar para a página principal</a>

              </form>

</div>


</body>
</html>
