</br></br></br>
<h1>Cadastrar Veterinário</h1>
<form action="?page=salvar-veterinario" method="POST" onsubmit="return validarFormulario()">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome do Veterinário</label>
		<input type="text" name="nome_veterinario" class="form-control">
	</div>
	<div class="mb-3">
		<label>CRMV</label>
		<input type="text" name="crmv_veterinario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Especialidade</label>
		<input type="text" name="especialidade_veterinario" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>

<script>
    function validarFormulario() {
    	const nome = document.getElementById('nome_veterinario').value.trim();
        const crmv = document.getElementById('crmv_veterinario').value.trim();
        const especialidade = document.getElementById('especialidade_veterinario').value.trim();

        if (!nome) {
            alert('Por favor, preencha o nome do Veterinário.');
            return false;
        }

        if (!crmv) {
            alert('Por favor, preencha o crmv do Veterinário.');
            return false;
        }

        if (!especialidade) {
            alert('Por favor, preencha a especialidade do Veterinário.');
            return false;
        }

        return true; // Submete o formulário se todos os campos forem válidos
    }
</script>