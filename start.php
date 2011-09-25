<?php

date_default_timezone_set('America/Los_Angeles');

function heart_init() {
	elgg_extend_view('css/elgg', 'HEART/css');
	elgg_extend_view('page/elements/footer', 'HEART/footer');
	elgg_extend_view('page/elements/head', 'HEART/metatags', 1);

	if (!elgg_is_logged_in()) {
		elgg_register_menu_item('footer', array(
			'name' => 'login',
			'text' => 'Member Sign in',
			'href' => '/login',
			'section' => 'alt',
		));
	}

	elgg_register_menu_item('footer', array(
		'name' => 'design_by',
		'text' => 'Design by Evan and Katelyn Winslow',
		'href' => FALSE,
	));

	elgg_register_menu_item('footer', array(
		'name' => 'powered_by',
		'text' => 'Powered by Elgg',
		'href' => 'http://elgg.org',
	));

	elgg_register_plugin_hook_handler('register', 'menu:entity', 'HEART_entity_menu');

	elgg_unregister_menu_item('footer', 'report_this');
	elgg_unregister_menu_item('footer', 'about');
	elgg_unregister_menu_item('footer', 'terms');
	elgg_unregister_menu_item('footer', 'privacy');
}

function HEART_entity_menu($hook, $type, $items, $params) {
	$entity = $params['entity'];

	$items[] = ElggMenuItem::factory(array(
		'name' => 'timestamp',
		'text' => elgg_view_friendly_time($entity->time_created),
		'href' => $entity->getURL(),
		'priority' => 1,
		'class' => 'elgg-timestamp',
	));

	$items = array_filter($items, function($item) {
		return $item->getName() !== 'thread';
	});

	return $items;
}

elgg_register_event_handler('init', 'system', 'heart_init');