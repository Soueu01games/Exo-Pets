<?php 
include 'E:\Xampp\htdocs\Exo-Pets\programacaoweb2\config.php';# - pc casa
#include 'C:\xampp\htdocs\Emanuela\Projeto\config.php';# - pc faculdade
switch (@$_REQUEST['acao']) {
	case 'cadastrar':
		$nome = isset($_POST['nome_veterinario']) ? trim($_POST['nome_veterinario']) : '';
		$crmv = isset($_POST['crmv_veterinario']) ? trim($_POST['crmv_veterinario']) : '';
		$especialidade = isset($_POST['especialidade_veterinario']) ? trim($_POST['especialidade_veterinario']) : '';

// Verificar campos obrigatórios
        if (empty($nome)) {
            echo "<script>alert('Erro: O campo Nome é obrigatório.'); history.back();</script>";
            exit;
        }

        if (empty($crmv)) {
            echo "<script>alert('Erro: O campo CRMV é obrigatório.'); history.back();</script>";
            exit;
        }

        if (empty($especialidade)) {
            echo "<script>alert('Erro: O campo Especialidade é obrigatório.'); history.back();</script>";
            exit;
        }

		$sql = "INSERT INTO veterinario (
			nome_veterinario, 
			crmv_veterinario, 
			especialidade_veterinario) 
		VALUES (
			'{$nome}',
			'{$crmv}',
			'{$especialidade}'
		)";
		$res = $conn->query($sql);	

		if($res==true){
		print"<script>alert('Cadastrou com sucesso');</script>";
		print"<script>location.href='?page=listar-veterinario';</script>";
		}	
		else{
		print"<script>alert('Deu errado');</script>";
		print"<script>location.href='?page=listar-veterinario';</script>";
		}

		break;
	case 'editar':
		$nome = $_POST['nome_veterinario'];
		$crmv = $_POST['crmv_veterinario'];
		$especialidade = $_POST['especialidade_veterinario'];
		$sql = "UPDATE veterinario SET
					nome_veterinario='{$nome}', 
					crmv_veterinario='{$crmv}', 
					especialidade_veterinario='{$especialidade}'
				WHERE
					id_veterinario=".$_POST['id_veterinario'];

		$res = $conn->query($sql);	
		if($res==true){
		print"<script>alert('Editou com sucesso');</script>";
		print"<script>location.href='?page=listar-veterinario';</script>";
		}	
		else{
		print"<script>alert('Deu errado');</script>";
		print"<script>location.href='?page=listar-veterinario';</script>";
		}
		break;
	case 'excluir':
		$sql = "DELETE FROM veterinario WHERE id_veterinario=".$_REQUEST['id_veterinario'];

		$res = $conn->query($sql);	
		if($res==true){
		print"<script>alert('Excluiu com sucesso');</script>";
		print"<script>location.href='?page=listar-veterinario';</script>";
		}	
		else{
		print"<script>alert('Deu errado');</script>";
		print"<script>location.href='?page=listar-veterinario';</script>";
		}
		break;

	default:
		// código padrão
		break;
}
?>