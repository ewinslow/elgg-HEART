<?php

function heart_init() {
	elgg_extend_view('css/elgg', 'HEART/css');
	elgg_extend_view('page/elements/footer', 'HEART/footer');

	elgg_register_menu_item('footer', array(
		'name' => 'login',
		'text' => 'Member Sign in',
		'href' => '/login',
		'section' => 'alt',
	));
}

elgg_register_event_handler('init', 'system', 'heart_init');