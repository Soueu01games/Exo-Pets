</br></br></br>
<h1>Listar Tutor</h1>
<?php
include 'E:\Xampp\htdocs\Exo-Pets\programacaoweb2\config.php';# - pc casa
#include 'C:\xampp\htdocs\Emanuela\Projeto\config.php';# - pc faculdade
$sql = "SELECT * FROM tutor ";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if($qtd > 0){
	print"<p>Encontrou <b>$qtd</b> resultado(s). <button class='btn btn-primary'onclick=\"location.href='?page=cadastrar-tutor';\">Cadastrar novo Tutor</button></p>";
	print"<table class='table table-bordered table-striped table-hover'>";
	print"<tr>";
	print"<th>#</th>";
	print"<th>Nome</th>";
	print"<th>CPF</th>";
	print"<th>Telefone</th>";
	print"<th>E-mail</th>";
	print"<th>Endereço</th>";
	print"<th>Ações</th>";
	print"</tr>";
	$count = 1;
	while($row=$res->fetch_object()){
		print"<tr>";
		print "<td>".$count++."</td>";
		print "<td>".$row->nome_tutor."</td>";
		print "<td>".$row->cpf_tutor."</td>";
		print "<td>".$row->fone_tutor."</td>";
		print "<td>".$row->email_tutor."</td>";
		print "<td>".$row->endereco_tutor."</td>";
		print "<td>
			<button class='btn btn-success'onclick=\"location.href='?page=editar-tutor&id_tutor=".$row->id_tutor."';\">Editar</button>
			<button class='btn btn-danger'onclick=\"if(confirm('Tem certeza que quer excluir?')){location.href='?page=salvar-tutor&acao=excluir&id_tutor=".$row->id_tutor."';}else{false;}\">Excluir</button>
			  </td>";
		print"</tr>";
	}
	print"</table>";
	}
else{
	print"<p>Não foram encontrados <b>$qtd</b> resultado(s).</p>";
	}	

?>