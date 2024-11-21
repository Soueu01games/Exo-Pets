<h1>Editar veterinário</h1>
<?php
include 'E:\Xampp\htdocs\Exo-Pets\programacaoweb2\config.php';# - pc casa
#include 'C:\xampp\htdocs\Emanuela\Projeto\config.php';# - pc faculdade
$sql = "SELECT * FROM veterinario WHERE id_veterinario=".$_REQUEST['id_veterinario'];
$res = $conn->query($sql);
$row= $res->fetch_object();

?>

<form action="?page=salvar-veterinario" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_veterinario" value="<?php print $row->id_veterinario; ?>">
	<div class="mb-3">
		<label>Nome do Médico</label>
		<input type="text" name="nome_veterinario" class="form-control" value="<?php print $row->nome_veterinario;?>">
	</div>
	<div class="mb-3">
		<label>CRMV</label>
		<input type="text" name="crmv_veterinario" class="form-control" value="<?php print $row->crmv_veterinario;?>">
	</div>
	<div class="mb-3">
		<label>Especialidade</label>
		<input type="text" name="especialidade_veterinario" class="form-control" value="<?php print $row->especialidade_veterinario;?>">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>