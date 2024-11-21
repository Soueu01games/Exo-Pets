<?php 
include 'E:\Xampp\htdocs\Exo-Pets\programacaoweb2\config.php';# - pc casa
#include 'C:\xampp\htdocs\Emanuela\Projeto\config.php';# - pc faculdade
switch (@$_REQUEST['acao']) {
	case 'cadastrar':
		$nome = $_POST['nome_tutor'];
		$cpf = $_POST['cpf_tutor'];
		$fone = $_POST['fone_tutor'];
		$email = $_POST['email_tutor'];
		$endereco = $_POST['endereco_tutor'];
		
		$sql = "INSERT INTO tutor (
			nome_tutor, 
			cpf_tutor,  
			fone_tutor, 
			email_tutor, 
			endereco_tutor
		) VALUES (
			'{$nome}',
			'{$cpf}',
			'{$fone}',
			'{$email}',
			'{$endereco}'
		)";
		$res = $conn->query($sql);	

		if($res==true){
		print"<script>alert('Cadastrou com sucesso');</script>";
		print"<script>location.href='?page=listar-tutor';</script>";
		}	
		else{
		print"<script>alert('Deu errado');</script>";
		print"<script>location.href='?page=listar-tutor';</script>";
		}
		
		break;
	case 'editar':
		$nome = $_POST['nome_tutor'];
		$cpf = $_POST['cpf_tutor'];
		$fone = $_POST['fone_tutor'];
		$email = $_POST['email_tutor'];
		$endereco = $_POST['endereco_tutor'];
		
		$sql = "UPDATE tutor SET
			nome_tutor='{$nome}', 
			cpf_tutor='{$cpf}', 
			fone_tutor='{$fone}', 
			email_tutor='{$email}', 
			endereco_tutor='{$endereco}'
		WHERE id_tutor=".@$_POST['id_tutor'];

		$res = $conn->query($sql);	
		if($res==true){
		print"<script>alert('Editou com sucesso');</script>";
		print"<script>location.href='?page=listar-tutor';</script>";
		}	
		else{
		print"<script>alert('Deu errado');</script>";
		print"<script>location.href='?page=listar-tutor';</script>";
		}
		break;
	case 'excluir':
		$sql = "DELETE FROM tutor WHERE id_tutor=".$_REQUEST['id_tutor'];

		$res = $conn->query($sql);	
		if($res==true){
		print"<script>alert('Excluiu com sucesso');</script>";
		print"<script>location.href='?page=listar-tutor';</script>";
		}	
		else{
		print"<script>alert('Deu errado');</script>";
		print"<script>location.href='?page=listar-tutor';</script>";
		}

		break;
	default:
		// código padrão
		break;
}
?>