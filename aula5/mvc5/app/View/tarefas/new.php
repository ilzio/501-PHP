<h2>Nova tarefa</h2>
<form action="?r=tarefas/create" method="POST">
	<p>descricao:</p>
	<input type="text" name="descricao" required>
	
	<input type="hidden" name="id_usuario" value="1">
	<p>status:</p>
	<input type="text" name="status" required>
	<p><input type="submit" value="Salvar"></p>
</form>
<a href="?r=tarefas">Voltar</a>
