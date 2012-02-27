<?php 

$title = $vars['title'];

unset($vars['title']);

$attrs = elgg_format_attributes($vars);

echo elgg_view_menu('title', array(
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz',
)); 

echo "<h1 $attrs>$title</h1>";
