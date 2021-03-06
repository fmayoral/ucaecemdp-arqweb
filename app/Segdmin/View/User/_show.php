<p>
<?php if($producer->getUser()): ?>
	Usuario: <strong><?= $producer->getUser()->getEmail() ?></strong>
	&nbsp;<a href="#" title="Editar usuario" class="btn"><i class="icon icon-pencil"></i></a>
<?php else: ?>
	Usuario: <em>Este productor no posee un usuario, solo un administrador puede gestionarlo.</em>
<?php endif; ?>
</p>
<legend>Datos Personales</legend>
<fieldset class="margined">
	<p>Nombre: <strong><?= $producer->getName() ?></strong>
	<p>Apellido: <strong><?= $producer->getLastName() ?></strong>
	<p>DNI: <strong><?= $producer->getDni() ?></strong>
	<p>Dirección: <strong><?= $producer->getAddress() ?></strong>
	<p>Teléfonos: <strong><?= $producer->getPhones() ?></strong>
</fieldset>
