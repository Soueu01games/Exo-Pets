<h1>Cadastrar Veterinário</h1>
<form action="?page=salvar-veterinario" method="POST">
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