<?php $this->extend('Base:full') ?>

<?php $this->block('content') ?>
<?= $this->partial('Entity:_genericDetail', array(
	'entity' => $producer,
	'title' => 'Detalles del usuario',
	'editView' => $this->partial('Producer:_form', array('producer' => $producer)),
	'showView' => $this->partial('Producer:_show', array('producer' => $producer)),
	'removeRoute' => 'producer_remove',
	'updateRoute' => 'producer_update',
)) ?>
<?php $this->endBlock() ?>