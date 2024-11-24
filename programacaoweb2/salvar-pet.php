<?php
include 'E:\Xampp\htdocs\Exo-Pets\programacaoweb2\config.php';# - pc casa
#include 'C:\xampp\htdocs\Emanuela\Projeto\config.php';# - pc faculdade

switch (@$_REQUEST['acao']) {
    case 'cadastrar':
        $tutor = isset($_POST['tutor_id_tutor']) ? $_POST['tutor_id_tutor'] : '';
        $nome = isset($_POST['nome_pet']) ? trim($_POST['nome_pet']) : '';
        $especie = isset($_POST['especie_pet']) ? trim($_POST['especie_pet']) : '';
        $idade = $_POST['idade_pet'];
        $peso = $_POST['peso_pet'];

        // Verificar campos obrigatórios
        if (empty($tutor)) {
            echo "<script>alert('Erro: O campo Tutor é obrigatório.'); history.back();</script>";
            exit;
        }

        if (empty($nome)) {
            echo "<script>alert('Erro: O campo Nome é obrigatório.'); history.back();</script>";
            exit;
        }

        if (empty($especie)) {
            echo "<script>alert('Erro: O campo Espécie é obrigatório.'); history.back();</script>";
            exit;
        }

        $sql = "INSERT INTO pet (
                    tutor_id_tutor,
                    nome_pet,
                    especie_pet,
                    idade_pet,
                    peso_pet
                ) VALUES (
                    '{$tutor}',
                    '{$nome}',
                    '{$especie}',
                    '{$idade}',
                    '{$peso}'
                )";

        $res = $conn->query($sql);

        if ($res == true) {
            echo "<script>alert('Cadastro realizado com sucesso!'); location.href='?page=listar-pet';</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar PET.'); history.back();</script>";
        }
        break;

    case 'editar':
        $nome = $_POST['nome_pet'];
        $especie = $_POST['especie_pet'];
        $idade = $_POST['idade_pet'];
        $peso = $_POST['peso_pet'];

        $sql = "UPDATE pet SET
                    nome_pet='{$nome}',
                    especie_pet='{$especie}',
                    idade_pet='{$idade}',
                    peso_pet='{$peso}'
                WHERE id_pet=" . $_REQUEST['id_pet'];

        $res = $conn->query($sql);
        if ($res == true) {
            echo "<script>alert('Editou com sucesso');</script>";
            echo "<script>location.href='?page=listar-pet';</script>";
        } else {
            echo "<script>alert('Erro ao editar PET.'); history.back();</script>";
        }
        break;

    case 'excluir':
        $sql = "DELETE FROM pet WHERE id_pet=" . $_REQUEST['id_pet'];

        $res = $conn->query($sql);
        if ($res == true) {
            echo "<script>alert('Excluiu com sucesso');</script>";
            echo "<script>location.href='?page=listar-pet';</script>";
        } else {
            echo "<script>alert('Erro ao excluir PET.'); history.back();</script>";
        }
        break;

    default:
        break;
}
?>
