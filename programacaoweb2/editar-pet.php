<h1>Editar Pet</h1>
<?php
include 'E:\Xampp\htdocs\Exo-Pets\programacaoweb2\config.php';# - pc casa
#include 'C:\xampp\htdocs\Emanuela\Projeto\config.php';# - pc faculdade
$sql = "SELECT * FROM pet WHERE id_pet=".$_REQUEST['id_pet'];
$res = $conn->query($sql);
$row= $res->fetch_object();

?>
<form action="?page=salvar-pet" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_pet" value="<?php print $row->id_pet;?>">
		<div class="mb-3">
		<label>Nome do Tutor</label>
		<select name="tutor_id_tutor_disabled" class="form-control" disabled>
			<?php
				$sql_1 = "SELECT id_tutor, nome_tutor FROM tutor ";
				$res_1 = $conn->query($sql_1);
				$qtd_1 = $res_1->num_rows;
				if($qtd_1 > 0){
					while($row_1 = $res_1->fetch_object()){
						if($row_1->id_tutor == $row->tutor_id_tutor){
							print "<option value=".$row_1->id_tutor." selected>".$row_1->nome_tutor."</option>";
						}
						else{
							print "<option value='".$row_1->id_tutor."'>".$row_1->nome_tutor."</option>";
						}
					}
				}
				else{
					print "<option>Não há Tutores</option>";
				}
			?>
		</select>	
	<div class="mb-3">
		<label>Nome do PET</label>
		<input type="text" name="nome_pet" class="form-control" value="<?php print $row->nome_pet;?>">
	</div>
	<div class="mb-3">
		<label>Espécie</label>
		<input type="text" name="especie_pet" class="form-control" value="<?php print $row->especie_pet;?>">
	</div>
	<div class="mb-3">
		<label>Idade</label>
		<input type="text" name="idade_pet" class="form-control" value="<?php print $row->idade_pet;?>">
	</div>
	<div class="mb-3">
		<label>Peso em Kg</label>
		<input type="text" name="peso_pet" class="form-control" value="<?php print $row->peso_pet;?>">
	</div>

	<div class="mb-3">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>

</form>
