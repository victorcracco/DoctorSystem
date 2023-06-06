<?php

include('protect.php');

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/img/heart-pulse.svg"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Pacientes - DoctorSystem</title>

 </head>
 <body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Doctor<b>System</b> <i class="bi bi-heart-pulse-fill"></i> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="container">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="painel.php"> <i class="bi bi-house-fill"></i> HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="agenda.php"> <i class="bi bi-calendar-heart-fill"></i> AGENDA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pacientes.php"> <i class="bi bi-person-fill"></i> </i> PACIENTES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="medicos.php"> <i class="bi bi-clipboard2-pulse-fill"></i> MÉDICOS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="exames.php"> <i class="bi bi-file-earmark-medical-fill"></i> EXAMES</a>
      </li>
    </ul>
	</div>
    <div class="form-inline my-2 my-lg-0">
      <a href="#" class="nav-link disabled ">  </i> Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?></a>
      <button class="btn btn-danger"> <a class="text-light"type="submit" href="logout.php"> <i class="bi bi-person"></i> Sair</a> </button>
    </div>
  </div>
</nav>
</br>
<main>
<div class="container">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gerenciar <b>Pacientes</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="bi bi-person-fill-add"></i> <span>Adicionar Paciente</span></a>
					</div>
				</div>
			</div>
			<div id="displayDataTable"></div>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="" method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Adicionar Paciente</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nome</label>
						<input type="text" class="form-control" id="nome" req-uired>
					</div>
					<div class="form-group">
						<label>Data de Nascimento</label>
						<input type="date" class="form-control" id="data_nasc" required>
					</div>
					<div class="form-group">
						<label>CPF</label>
						<input type="text" class="form-control" id="cpf" required>
					</div>
					<div class="form-group">
						<label>Telefone</label>
						<input type="tel" class="form-control" id="telefone" required>
					</div>	

					<div class="form-group">
						<label>Convênio</label>
						<input type="text" class="form-control" id="convenio" required>
					</div>	

					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" id="email" required>
					</div>
					<div class="form-group">
						<label>CEP</label>
						<input type="text" class="form-control" id="cep" required>
					</div>
					<div class="form-group">
						<label>Cidade</label>
						<input type="tel" class="form-control" id="cidade" required>
					</div>	
					<div class="form-group">
						<label>Endereço</label>
						<textarea class="form-control" id="endereco" required> </textarea>
					</div>

					<div class="form-group">
						<label>Prontuario</label>
						<textarea class="form-control" id="prontuario"></textarea>
					</div>
					<div class="form-group">
						<label>Exames</label>
						<input type="file" class="form-control" id="exame">
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-success" onClick="adduser()" value="Adicionar">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Editar Paciente</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nome</label>
						<input type="text" class="form-control" name="editarnome" required>
					</div>
					<div class="form-group">
						<label>Data de Nascimento</label>
						<input type="date" class="form-control" name="editardata_nasc" required>
					</div>
					<div class="form-group">
						<label>CPF</label>
						<input type="text" class="form-control" name="editarcpf" required>
					</div>
					<div class="form-group">
						<label>Telefone</label>
						<input type="tel" class="form-control" name="editartelefone" required>
					</div>	

					<div class="form-group">
						<label>Convênio</label>
						<input type="text" class="form-control" name="editarconvenio" required>
					</div>	

					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="editaremail" required>
					</div>
					<div class="form-group">
						<label>CEP</label>
						<input type="text" class="form-control" name ="editarcep" required>
					</div>
					<div class="form-group">
						<label>Cidade</label>
						<input type="tel" class="form-control" name ="editarcidade" required>
					</div>	
					<div class="form-group">
						<label>Endereço</label>
						<textarea class="form-control" name ="editarendereco" required> </textarea>
					</div>

					<div class="form-group">
						<label>Prontuario</label>
						<textarea class="form-control" name="editarprontuario" required></textarea>
					</div>
					<div class="form-group">
						<label>Exames</label>
						<input type="file" class="form-control" name="editarexame">
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" onClick="SalvarEdit()" data-dismiss="modal" value="Cancelar">
					<input type="hidden" id="hiddendata">
					<input type="submit" class="btn btn-info" value="Salvar">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Deletar Paciente </h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Deseja remover o paciente da base de dados? </p>
					<p class="text-warning"><large><i class="bi bi-exclamation-diamond-fill"></i> Essa ação é irreversivel.</lar></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-danger" value="Salvar">
				</div>
			</form>
		</div>
	</div>
</div>

<div id="imprimirPdf" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Imprimir ficha cadastral</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Deseja imprimir a ficha do paciente?</p>
					<p class="text-warning"><large><i class="bi bi-filetype-pdf"></i> Será gerado um PDF para impressão</lar></p>
					<input type="submit" class="btn btn-secondary" value="Imprimir ">
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">

				</div>
			</form>
		</div>
	</div>
</div>


</main>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	<script>
$(document).ready(function(){
	displayData();
});
	function displayData(){
		var displayData="true";
		$.ajax({
			url:"exibir.php",
			type: "post",
			data:{
				displaySend:displayData
			},
			success:function(data,status){
				$('#displayDataTable').html(data);
			}
		});
	}


	 function adduser(){
	var nomeAdd=$('#nome').val();
	var dataAdd=$('#data_nasc').val();
	var cpfAdd=$('#cpf').val();
	var telefoneAdd=$('#telefone').val();
	var convenioAdd=$('#convenio').val();
	var emailAdd=$('#email').val();
	var cepAdd=$('#cep').val();
	var cidadeAdd=$('#cidade').val();
	var enderecoAdd=$('#endereco').val();
	var prontuarioAdd=$('#prontuario').val();
	var exameAdd=$('#exame').val();


	$.ajax({
		url:"inserir.php",
		type: 'post',
		data:{
			enviarNome: nomeAdd,
			enviarData: dataAdd,
			enviarCpf: cpfAdd,
			enviarTelefone: telefoneAdd,
			enviarConvenio: convenioAdd,
			enviarEmail: emailAdd,
			enviarCep: cepAdd,
			enviarCidade: cidadeAdd,
			enviarEndereco: enderecoAdd,
			enviarProntuario: prontuarioAdd,
			enviarExame: exameAdd
		},
		success: function(data,status){
			displayData();
		}
	});
}

function DeletarUsuario(deleteid){
	$.ajax({
		url:"deletar.php",
		type: 'post',
		data:{
			enviarDelete:deleteid
		},
		success:function(data,status){
			displayData();
		}
	})
}

function EditarUsuario(editid){
	$('#hiddendata').val(editid);

	$.post("editar.php",{editid:editid}function(data,status){

		var userid=JSON.parse(data);

		$('#editarnome').val(userid.nome);
		$('#editadata_nasc').val(userid.data_nasc);
		$('#editarcpf').val(userid.cpf);
		$('#editartelefone').val(userid.telefone);
		$('#editarconvenio').val(userid.convenio);
		$('#editaremail').val(userid.email);
		$('#editarcep').val(userid.cep);
		$('#editarcidade').val(userid.cidade);
		$('#editarendereco').val(userid.endereco);
		$('#editarprontuario').val(userid.prontuario);
		$('#editarexame').val(userid.exame);
		
	});

	$('#editModal').modal('show');

}

function SalvarEdit()
var editarnome=$('editarnome').val();
var editardata_nasc=$('editarnome').val();
var editarcpf=$('editarnome').val();
var editartelefone=$('editarnome').val();
var editarconvenio=$('editarnome').val();
var editaremail=$('editarnome').val();
var editarcep=$('editarnome').val();
var editarcidade=$('editarnome').val();
var editarendereco=$('editarnome').val();
var editarprontuario=$('editarnome').val();
var editarexame=$('editarnome').val();



	</script>

</body>
 </html>