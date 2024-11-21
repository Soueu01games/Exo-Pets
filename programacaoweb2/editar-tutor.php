</br></br></br>
<h1>Editar Tutor</h1>
<?php
include 'E:\Xampp\htdocs\Exo-Pets\programacaoweb2\config.php';# - pc casa
#include 'C:\xampp\htdocs\Emanuela\Projeto\config.php';# - pc faculdade
$sql = "SELECT * FROM tutor WHERE id_tutor=".$_REQUEST['id_tutor'];
$res = $conn->query($sql);
$row= $res->fetch_object();

?>

<form action="?page=salvar-tutor" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_tutor" value="<?php print $row->id_tutor; ?>">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome_tutor" class="form-control" value="<?php print $row->nome_tutor;?>">
	</div>
	<div class="mb-3">
		<label>CPF</label>
		<input type="text" name="cpf_tutor" class="form-control" value="<?php print $row->cpf_tutor;?>">
	</div>
	</div>
	<div class="mb-3">
		<labelT>Telefone</label>
		<input type="text" name="fone_tutor" class="form-control" value="<?php print $row->fone_tutor;?>">
	</div>
	<div class="mb-3">
		<label>Email</label>
		<input type="text" name="email_tutor" class="form-control" value="<?php print $row->email_tutor;?>">
	</div>
	<div class="mb-3">
		<label>Endereço</label>
		<input type="text" name="endereco_tutor" class="form-control" value="<?php print $row->endereco_tutor;?>">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>