<?php

include 'conexao.php';

if(isset($_POST['enviarDelete'])){
    $unique=$_POST['enviarDelete'];

    $sql="delete from `paciente` where id=$unique";
    $result=mysqli_query($mysqli,$sql);
}

?>