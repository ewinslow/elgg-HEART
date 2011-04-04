<?php

echo elgg_view('page/elements/header_logo', $vars);

echo elgg_view_menu('site', array(
	'class' => 'elgg-menu-hz',
	'order_by' => 'priority',
));