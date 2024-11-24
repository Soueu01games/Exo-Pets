<h1>Cadastrar PET</h1>
<form action="?page=salvar-pet" method="POST" onsubmit="return validarFormulario()">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome do Tutor</label>
        <select name="tutor_id_tutor" id="tutor_id_tutor" class="form-control">
            <option value=""> -= Escolha um Tutor =- </option>
            <?php
            include 'E:\Xampp\htdocs\Exo-Pets\programacaoweb2\config.php';# - pc casa
			#include 'C:\xampp\htdocs\Emanuela\Projeto\config.php';# - pc faculdade
            $sql_1 = "SELECT id_tutor, nome_tutor FROM tutor";
            $res_1 = $conn->query($sql_1);
            $qtd_1 = $res_1->num_rows;
            if ($qtd_1 > 0) {
                while ($row_1 = $res_1->fetch_object()) {
                    print "<option value='" . $row_1->id_tutor . "'>" . $row_1->nome_tutor . "</option>";
                }
            } else {
                print "<option value=''>Não há Tutores</option>";
            }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_pet" id="nome_pet" class="form-control">
    </div>
    <div class="mb-3">
        <label>Espécie</label>
        <input type="text" name="especie_pet" id="especie_pet" class="form-control">
    </div>
    <div class="mb-3">
        <label>Idade</label>
        <input type="text" name="idade_pet" class="form-control">
    </div>
    <div class="mb-3">
        <label>Peso em Kg</label>
        <input type="text" name="peso_pet" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>

<script>
    function validarFormulario() {
        const tutor = document.getElementById('tutor_id_tutor').value.trim();
        const nome = document.getElementById('nome_pet').value.trim();
        const especie = document.getElementById('especie_pet').value.trim();

        if (!tutor) {
            alert('Por favor, selecione um tutor.');
            return false;
        }

        if (!nome) {
            alert('Por favor, preencha o nome do pet.');
            return false;
        }

        if (!especie) {
            alert('Por favor, preencha a espécie do pet.');
            return false;
        }

        return true; // Submete o formulário se todos os campos forem válidos
    }
</script>
