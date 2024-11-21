<h1>Cadastrar Tutor</h1>
<form action="?page=salvar-tutor" method="POST">
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