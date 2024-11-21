<?php 
include 'E:\Xampp\htdocs\Exo-Pets\programacaoweb2\config.php';# - pc casa
#include 'C:\xampp\htdocs\Emanuela\Projeto\config.php';# - pc faculdade
switch (@$_REQUEST['acao']) {
	case 'cadastrar':
		$pet = $_POST['pet_id_pet'];
		$veterinario = $_POST['veterinario_id_veterinario'];
		$data = $_POST['data_consulta'];
		$hora = $_POST['hora_consulta'];
		$descricao = $_POST['descricao_consulta'];
		
		$sql = "INSERT INTO consulta (
			pet_id_pet,
			veterinario_id_veterinario,
			data_consulta, 
			hora_consulta, 
			descricao_consulta) 
		VALUES (
			'{$pet}',
			'{$veterinario}',
			'{$data}',
			'{$hora}',
			'{$descricao}')";

		$res = $conn->query($sql);	
		if($res==true){
		print"<script>alert('Cadastrou com sucesso');</script>";
		print"<script>location.href='?page=listar-consulta';</script>";
		}	
		else{
		print"<script>alert('Deu errado');</script>";
		print"<script>location.href='?page=listar-consulta';</script>";
		}

		break;
	case 'editar':
		$veterinario = $_POST['veterinario_id_veterinario'];
		$data = $_POST['data_consulta'];
		$hora = $_POST['hora_consulta'];
		$descricao = $_POST['descricao_consulta'];
		$sql = "UPDATE consulta SET
					veterinario_id_veterinario='{$veterinario}',
					data_consulta='{$data}', 
					hora_consulta='{$hora}', 
					descricao_consulta='{$descricao}'
				WHERE
					id_consulta=".$_REQUEST['id_consulta'];

		$res = $conn->query($sql);	
		if($res==true){
		print"<script>alert('Editou com sucesso');</script>";
		print"<script>location.href='?page=listar-consulta';</script>";
		}	
		else{
		print"<script>alert('Deu errado');</script>";
		print"<script>location.href='?page=listar-consulta';</script>";
		}
		break;
	case 'excluir':
		$sql = "DELETE FROM consulta WHERE id_consulta=".$_REQUEST['id_consulta'];

		$res = $conn->query($sql);	
		if($res==true){
		print"<script>alert('Excluiu com sucesso');</script>";
		print"<script>location.href='?page=listar-consulta';</script>";
		}	
		else{
		print"<script>alert('Deu errado');</script>";
		print"<script>location.href='?page=listar-consulta';</script>";
		}
		break;

	default:
		// código padrão
		break;
}
?>