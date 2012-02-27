<?php 

$album = $vars['entity'];

echo elgg_view('object/elements/summary', array(
	'entity' => $album,
	'content' => elgg_list_entities(array(
		'type' => 'object',
		'subtype' => 'image',
		'container_guid' => $album->getGUID(),
		'full_view' => false,
		'gallery_class' => 'tidypics-list-album',
		'list_type' => 'gallery',
		'list_type_toggle' => false,
		'pagination' => false,
	)),
));