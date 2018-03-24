<h2>Lista de Tarefas</h2>

<table>
	<tr>
		<th>Tarefa</th>
		<th>Status</th>
		<th>Accoes</th>
	</tr>

<?php foreach ($tarefas as $tarefa): ?>
<tr>
	<td><?= $tarefa->getDescricao() ?></td>
	<td><?= $tarefa->getStatus() ?></td>
	<td><a href="?r=tarefas/edit/<?= $tarefa->getId() ?>">Editar</a> / <a href="?r=tarefas/delete">Excluir</a></td>

</tr>

<?php endforeach; ?>
</table>


<a href="?r=tarefas/new">Novo</a>
