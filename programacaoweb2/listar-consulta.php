<h1>Listar Consulta</h1>
<?php
include 'E:\Xampp\htdocs\Exo-Pets\programacaoweb2\config.php';# - pc casa
#include 'C:\xampp\htdocs\Emanuela\Projeto\config.php';# - pc faculdade
$sql = "SELECT * FROM consulta AS c 
		INNER JOIN veterinario AS v
		ON v.id_veterinario = c.veterinario_id_veterinario
		INNER JOIN pet AS p
		ON p.id_pet = c.pet_id_pet
";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if($qtd > 0){
	print"<p>Encontrou <b>$qtd</b> resultado(s)</p>";
	print"<table class='table table-bordered table-striped table-hover'>";
	print"<tr>";
	print"<th>#</th>";
	print"<th>Pet</th>";
	print"<th>Veterinário</th>";
	print"<th>Data</th>";
	print"<th>Hora</th>";
	print"<th>Descrição</th>";
	print"<th>Ações</th>";
	print"</tr>";
	$count = 1;
	while($row=$res->fetch_object()){
		print"<tr>";
		print "<td>".$count++."</td>";
		print "<td>".$row->nome_pet."</td>";;
		print "<td>".$row->nome_veterinario."</td>";
		print "<td>".$row->data_consulta."</td>";
		print "<td>".$row->hora_consulta."</td>";
		print "<td>".$row->descricao_consulta."</td>";
		print "<td>
			<button class='btn btn-success'onclick=\"location.href='?page=editar-consulta&id_consulta=".$row->id_consulta."';\">Editar</button>
			<button class='btn btn-danger'onclick=\"if(confirm('Tem certeza que quer excluir?')){location.href='?page=salvar-consulta&acao=excluir&id_consulta=".$row->id_consulta."';}else{false;}\">Excluir</button>
			  </td>";
		print"</tr>";
	}
	print"</table>";
	}
else{
	print"<p>Não foram encontrados resultado(s).</p>";
	}	

?>