<?php

$guid = get_input('guid');

$month = get_input('publish_month');
$day = get_input('publish_day');
$year = get_input('publish_year');

$hour = get_input('publish_hour');
$minute = get_input('publish_minute');

$time = "{$year}-{$month}-{$day}T{$hour}:{$minute}";
$time_created = (int)strtotime($time);

$entity = get_entity($guid);

if (!$entity) {
	register_error("not found");
} elseif (!$entity->canEdit() || !in_array($entity->getSubtype(), array('blog', 'album'))) {
	register_error('no permission');
} elseif (!$time_created) {
	register_error("could not parse the time ($time)");
} else {
	$entity->time_created = $time_created;
	$entity->save();
	
	system_message("Successfully changed the publish date");
}

forward(REFERER);