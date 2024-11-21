<?php 
include 'E:\Xampp\htdocs\Exo-Pets\programacaoweb2\config.php';# - pc casa
#include 'C:\xampp\htdocs\Emanuela\Projeto\config.php';# - pc faculdade
switch (@$_REQUEST['acao']) {
	case 'cadastrar':
		$tutor = $_POST['tutor_id_tutor'];
		$nome = $_POST['nome_pet'];
		$especie = $_POST['especie_pet'];
		$idade = $_POST['idade_pet'];
		$peso = $_POST['peso_pet'];
		
		$sql = "INSERT INTO pet (
			tutor_id_tutor,
			nome_pet,
			especie_pet,
			idade_pet,
			peso_pet
			)
			VALUES (
			'{$tutor}',
			'{$nome}',
			'{$especie}',
			'{$idade}',
			'{$peso}'
			)";
				
		$res = $conn->query($sql);	

		if($res==true){
		print"<script>alert('Cadastrou com sucesso');</script>";
		print"<script>location.href='?page=listar-pet';</script>";
		}	
		else{
		print"<script>alert('Deu errado');</script>";
		print"<script>location.href='?page=listar-pet';</script>";
		}

		break;
	case 'editar':
		$nome = $_POST['nome_pet'];
		$especie = $_POST['especie_pet'];
		$idade = $_POST['idade_pet'];
		$peso = $_POST['peso_pet'];
		
		$sql = "UPDATE pet SET
					nome_pet='{$nome}',
					especie_pet= '{$especie}',
					idade_pet= '{$idade}',
					peso_pet= '{$peso}'
					
				WHERE
					id_pet=".$_REQUEST['id_pet'];

		$res = $conn->query($sql);	
		if($res==true){
		print"<script>alert('Editou com sucesso');</script>";
		print"<script>location.href='?page=listar-pet';</script>";
		}	
		else{
		print"<script>alert('Deu errado');</script>";
		print"<script>location.href='?page=listar-pet';</script>";
		}
		break;

	case 'excluir':
		$sql = "DELETE FROM pet WHERE id_pet=".$_REQUEST['id_pet'];

		$res = $conn->query($sql);	
		if($res==true){
		print"<script>alert('Excluiu com sucesso');</script>";
		print"<script>location.href='?page=listar-pet';</script>";
		}	
		else{
		print"<script>alert('Deu errado');</script>";
		print"<script>location.href='?page=listar-pet';</script>";
		}
		break;

	default:
		// código padrão
		break;
}
?>