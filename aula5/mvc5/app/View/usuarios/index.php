<h2>Lista de Usuários</h2>

<table>
	<tr>
		<th>Nome</th>
		<th>Email</th>
		<th>Accoes</th>
	</tr>

<?php foreach ($usuarios as $usuario): ?>
<tr>
	<td><?= $usuario->getNome() ?></td>
	<td><?= $usuario->getEmail() ?></td>
	<td><a href="?r=usuarios/edit&id=<?= $usuario->getId() ?>">Editar</a> / <a href="?r=usuarios/delete">Excluir</a></td>

</tr>

<?php endforeach; ?>
</table>


<a href="?r=usuarios/new">Novo</a>
