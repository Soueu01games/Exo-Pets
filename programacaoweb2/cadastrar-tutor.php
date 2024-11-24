</br></br></br>
<h1>Cadastrar Tutor</h1>
<form action="?page=salvar-tutor" method="POST" onsubmit="return validarFormulario()">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome_tutor" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF</label>
		<input type="text" name="cpf_tutor" class="form-control">
	</div>
	<div class="mb-3">
		<labelT>Telefone</label>
		<input type="text" name="fone_tutor" class="form-control">
	</div>
	<div class="mb-3">
		<label>Email</label>
		<input type="text" name="email_tutor" class="form-control">
	</div>
	<div class="mb-3">
		<label>Endereço</label>
		<input type="text" name="endereco_tutor" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>

<script>
    function validarFormulario() {
    	const nome = document.getElementById('nome_tutor').value.trim();
        const cpf = document.getElementById('cpf_tutor').value.trim();
        const fone = document.getElementById('fone_tutor').value.trim();

        if (!nome) {
            alert('Por favor, preencha o nome do tutor.');
            return false;
        }

        if (!cpf) {
            alert('Por favor, preencha o Cpf do tutor.');
            return false;
        }

        if (!fone) {
            alert('Por favor, preencha o Telefone do tutor.');
            return false;
        }

        return true; // Submete o formulário se todos os campos forem válidos
    }
</script>