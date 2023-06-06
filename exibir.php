<?php
include 'conexao.php';
if(isset($_POST['displaySend'])){
    $table='<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>
        </th>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Email</th>
        <th>Ação</th>
    </tr>
    </thead>';
        $sql="Select * from `paciente`";
        $result=mysqli_query($mysqli,$sql);
        $number=1;
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $nome=$row['nome'];
            $cpf=$row['cpf'];
            $email=$row['email'];
            $table.='<tbody>
            <tr>
                <td>
                </td>
                <td>'.$number.'</td>
                <td>'.$nome.'</td>
                <td>'.$cpf.'</td>
                <td>'.$email.'</td>
                <td>          
                    <button class="btn btn-outline-primary" onClick="EditarUsuario('.$id.')"><i class="bi bi-pen-fill"></i></button>
                    <button class="btn btn-outline-danger" onClick="DeletarUsuario('.$id.')"><i class="bi bi-x-circle-fill"></i></button>
                    <button class="btn btn-outline-info" onClick="#imprimirPdf"><i class="bi bi-printer-fill"></i></button>
                </td>
            </tr>
        </tbody>';
        $number++;
        }
        $table.='</table>';
        echo $table;
}

?>