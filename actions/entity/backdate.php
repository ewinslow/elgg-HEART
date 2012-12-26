<?php

$guid = get_input('guid');

$published = get_input('published', false, false);

if (!$published) {
	register_error("Published time field is required");
	forward(REFERER);
}

$time_created = (int)strtotime($published);

$entity = get_entity($guid);

if (!$entity) {
	register_error("not found");
} elseif (!$entity->canEdit() || !in_array($entity->getSubtype(), array('blog', 'album'))) {
	register_error('no permission');
} elseif (!$time_created) {
	register_error("could not parse the time ($published)");
} else {
	$entity->time_created = $time_created;
	$entity->save();
	
	system_message("Successfully changed the publish date");
}

forward(REFERER);
