<?php

include 'conexao.php';

extract($_POST);

if(isset($_POST['enviarNome']) && isset($_POST['enviarData']) && isset($_POST['enviarCpf']) && isset($_POST['enviarTelefone'])  && isset($_POST['enviarConvenio'])  && isset($_POST['enviarEmail'])  && isset($_POST['enviarCep'])  && isset($_POST['enviarCidade'])  && isset($_POST['enviarEndereco'])  && isset($_POST['enviarProntuario']) && isset($_POST['enviarExame'])) {

    $sql="insert into `paciente` (nome,data_nasc,cpf,telefone,convenio,email,cep,cidade,endereco,prontuario,exame)
    values ('$enviarNome', '$enviarData','$enviarCpf','$enviarTelefone','$enviarConvenio','$enviarEmail','$enviarCep','$enviarCidade','$enviarEndereco','$enviarProntuario','$enviarExame')";


    $result=mysqli_query($mysqli,$sql);
}




?>