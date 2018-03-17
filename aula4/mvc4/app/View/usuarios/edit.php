
<h2>editar usuario</h2>
<form action="?r=usuarios/update" method="POST">
	<p>Usuário:</p>
	<input type="text" name="usuario" value="<?= $usuarios['usuario'] ?>">
	<p>Senha:</p>
	<input type="password" name="senha">
	<p><input type="submit" value="Salvar"></p>
</form>
<a href="?r=usuarios">Voltar</a>
