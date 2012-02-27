<?php

$entity = $vars['entity'];

echo elgg_view('input/datetime', array(
	'name' => 'publish',
	'value' => $entity->time_created,
));

echo elgg_view('input/hidden', array(
	'name' => 'guid',
	'value' => $entity->guid,
));

echo '<div class="elgg-foot">';
echo elgg_view('input/submit');
echo '</div>';