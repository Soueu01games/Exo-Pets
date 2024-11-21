<h1>Editar Consulta </h1>
<?php
	include 'E:\Xampp\htdocs\Exo-Pets\programacaoweb2\config.php';# - pc casa
	#include 'C:\xampp\htdocs\Emanuela\Projeto\config.php';# - pc faculdade
	$sql = "SELECT * FROM consulta WHERE id_consulta=".$_REQUEST['id_consulta'];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=salvar-consulta" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_consulta" value="<?php print $row->id_consulta; ?>">
	<div class="mb-3">
		<label>Nome do PET</label>
		<select name="pet_id_pet_disabled" class="form-control" disabled>
			<?php
				$sql_1 = "SELECT id_pet, nome_pet FROM pet ";
				$res_1 = $conn->query($sql_1);
				$qtd_1 = $res_1->num_rows;
				if($qtd_1 > 0){
					while($row_1 = $res_1->fetch_object()){
						if($row_1->id_pet == $row->pet_id_pet){
							print "<option value=".$row_1->id_pet." selected>".$row_1->nome_pet."</option>";
						}
						else{
							print "<option value='".$row_1->id_pet."'>".$row_1->nome_pet."</option>";
						}
					}
				}
				else{
					print "<option>Não há PETs</option>";
				}
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>Nome do Veterinário</label>
		<select name="veterinario_id_veterinario" class="form-control">
			<option> -= Escolha um Veterinário =- </option>
			<?php
				$sql_2 = "SELECT id_veterinario, nome_veterinario FROM veterinario";
				$res_2 = $conn->query($sql_2);
				$qtd_2 = $res_2->num_rows;
				if($qtd_2 > 0){
					while($row_2 = $res_2->fetch_object()){
						print "<option value='".$row_2->id_veterinario."'>".$row_2->nome_veterinario."</option>";
					}
				}
				else{
					print "<option>Não há Veterinários</option>";
				}
			?>
		</select>		
	</div>
	<div class="mb-3">
		<label>Data da Consulta</label>
		<input type="date" name="data_consulta" class="form-control" value="<?php print $row->data_consulta; ?>">
	</div>
	<div class="mb-3">
		<label>Hora da Consulta</label>
		<input type="time" name="hora_consulta" class="form-control" value="<?php print $row->hora_consulta; ?>">
	</div>
	<div class="mb-3">
		<label>Descrição</label>
		<textarea name="descricao_consulta" class="form-control"><?php print $row->descricao_consulta; ?></textarea>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>