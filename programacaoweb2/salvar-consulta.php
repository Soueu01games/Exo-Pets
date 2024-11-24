<?php 
include 'E:\Xampp\htdocs\Exo-Pets\programacaoweb2\config.php';# - pc casa
#include 'C:\xampp\htdocs\Emanuela\Projeto\config.php';# - pc faculdade
switch (@$_REQUEST['acao']) {
	case 'cadastrar':
		$pet = isset($_POST['pet_id_pet']) ? $_POST['pet_id_pet'] : '';
		$tutor = $_POST['tutor_id_tutor'];
		$veterinario = isset($_POST['veterinario_id_veterinario']) ? $_POST['veterinario_id_veterinario'] : '';
		$data = isset($_POST['data_consulta']) ? $_POST['data_consulta'] : '';
		$hora = isset($_POST['hora_consulta']) ? $_POST['hora_consulta'] : '';
		$descricao = isset($_POST['descricao_consulta']) ? $_POST['descricao_consulta'] : '';

 		// Verificar campos obrigatórios
        if (empty($pet) || $pet === "-= Escolha um PET =-") {
    echo "<script>alert('Erro: O campo Pet é obrigatório.'); history.back();</script>";
    exit;
}
if (empty($veterinario) || $veterinario === "-= Escolha um Veterinário =-") {
    echo "<script>alert('Erro: O campo Veterinário é obrigatório.'); history.back();</script>";
    exit;
}
        if (empty($data)) {
            echo "<script>alert('Erro: O campo Data é obrigatório.'); history.back();</script>";
            exit;
        }
        if (empty($hora)) {
            echo "<script>alert('Erro: O campo Hora é obrigatório.'); history.back();</script>";
            exit;
        }
        if (empty($descricao)) {
            echo "<script>alert('Erro: O campo Descrição é obrigatório.'); history.back();</script>";
            exit;
        }
		
		
		$sql = "INSERT INTO consulta (
			pet_id_pet,
			tutor_id_tutor,
			veterinario_id_veterinario,
			data_consulta, 
			hora_consulta, 
			descricao_consulta) 
		VALUES (
			'{$pet}',
			'{$tutor}',
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