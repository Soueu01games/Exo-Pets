</br></br></br>
<h1>Listar Pet</h1>
<?php
include 'E:\Xampp\htdocs\Exo-Pets\programacaoweb2\config.php';# - pc casa
#include 'C:\xampp\htdocs\Emanuela\Projeto\config.php';# - pc faculdade
$sql = "SELECT * FROM pet AS p
		INNER JOIN tutor AS t
		ON t.id_tutor = p.tutor_id_tutor ";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0){
	
print"<p>Encontrou <b>$qtd</b> resultado(s). <button class='btn btn-primary'onclick=\"location.href='?page=cadastrar-pet';\">Cadastrar novo PET</button></p>";

	print"<table class='table table-bordered table-striped table-hover'>";
	print"<tr>";
	print"<th>#</th>";
	print"<th>Nome</th>";
	print"<th>Tutor</th>";
	print"<th>Espécie</th>";
	print"<th>Idade</th>";
	print"<th>Peso</th>";
	print"<th>Ações</th>";
	print"</tr>";
	$count = 1;
	while($row=$res->fetch_object()){
		print"<tr>";
		print "<td>".$count++."</td>";
		print "<td>".$row->nome_pet."</td>";
		print "<td>".$row->nome_tutor."</td>";
		print "<td>".$row->especie_pet."</td>";
		print "<td>".$row->idade_pet."</td>";
		print "<td>".$row->peso_pet."</td>";
		print "<td>
			<button class='btn btn-success'onclick=\"location.href='?page=editar-pet&id_pet=".$row->id_pet."';\">Editar</button>
			<button class='btn btn-danger'onclick=\"if(confirm('Tem certeza que quer excluir?')){location.href='?page=salvar-pet&acao=excluir&id_pet=".$row->id_pet."';}else{false;}\">Excluir</button>

			  </td>";
		print"</tr>";
	}
	print"</table>";
	}
else{
	print"<p>Não foram encontrados <b>$qtd</b> resultado(s).</p>";
	
	}	
	
?>