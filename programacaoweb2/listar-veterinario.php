<h1>Listar Veterinário</h1>
<?php
include 'E:\Xampp\htdocs\Exo-Pets\programacaoweb2\config.php';# - pc casa
#include 'C:\xampp\htdocs\Emanuela\Projeto\config.php';# - pc faculdade
$sql = "SELECT * FROM veterinario";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0){
	print"<p>Encontrou <b>$qtd</b> resultado(s).</p>";
	print"<table class='table table-bordered table-striped table-hover'>";
	print"<tr>";
	print"<th>#</th>";
	print"<th>Nome</th>";
	print"<th>CRMV</th>";
	print"<th>Especialidade</th>";
	print"<th>Ações</th>";
	print"</tr>";
	$count = 1;
	while($row=$res->fetch_object()){
		print"<tr>";
		print "<td>".$count++."</td>";
		print "<td>".$row->nome_veterinario."</td>";
		print "<td>".$row->crmv_veterinario."</td>";
		print "<td>".$row->especialidade_veterinario."</td>";
		print "<td>
			<button class='btn btn-success'onclick=\"location.href='?page=editar-veterinario&id_veterinario=".$row->id_veterinario."';\">Editar</button>
			<button class='btn btn-danger'onclick=\"if(confirm('Tem certeza que quer excluir?')){location.href='?page=salvar-veterinario&acao=excluir&id_veterinario=".$row->id_veterinario."';}else{false;}\">Excluir</button>
			  </td>";
		print"</tr>";
	}
	print"</table>";
	}
else{
	print"<p>Não foram encontrados <b>$qtd</b> resultado(s).</p>";
	}	

?>