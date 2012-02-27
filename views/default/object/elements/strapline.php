<?php 

$entity = $vars['entity'];

$owner = $entity->getOwnerEntity();

// Sometimes the entity doesn't have a valid owner?
// TODO(evan.b.winslow@gmail.com): Find out why this happens...
if (!$owner) {
	return true;
}

if ($entity->owner_guid == elgg_get_page_owner_guid()) {
	echo elgg_view('output/date', array('value' => $entity->time_created));
} else {
	echo elgg_echo('entity:default:strapline', array(
		elgg_view('output/date', array('value' => $entity->time_created)),
		elgg_view('output/url', array(
			'href' => $owner->getURL(),
			'text' => $owner->name,
			'is_trusted' => true,
		)),
	));
}

