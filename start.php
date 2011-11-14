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
	
	elgg_unregister_menu_item('site', 'activity');
	elgg_unregister_menu_item('site', 'thewire');
	
	
	elgg_register_menu_item('site', array(
		'name' => 'home',
		'text' => '1 Home',
		'href' => '/',
	));
	
	// ABOUT Menu
	elgg_register_menu_item('site', array(
		'name' => 'about',
		'text' => "2 About",
		'href' => 'http://africaheart.com/about.html',
	));

	elgg_register_menu_item('site', array(
		'parent_name' => 'about',
		'name' => 'vision',
		'text' => '1 Our Vision',
		'href' => 'http://africaheart.com/about.html',
	));
	
	elgg_register_menu_item('site', array(
		'parent_name' => 'about',
		'name' => 'team',
		'text' => '2 Our Team',
		'href' => 'http://africaheart.com/leaderStaff.html',
	));
	
	elgg_register_menu_item('site', array(
		'parent_name' => 'about',
		'name' => 'partners',
		'text' => '3 Our Partners',
		'href' => 'http://www.liftupafrica.org/project_africa_heart_greenhouse_project.php'
	));
	
	elgg_register_menu_item('site', array(
		'parent_name' => 'about',
		'name' => 'contactus',
		'text' => '4 Contact Us',
		'href' => 'http://africaheart.com/contactUs.html',
	));
	
	elgg_register_menu_item('site', array(
		'parent_name' => 'about',
		'name' => 'kenya',
		'text' => '5 About Kenya',
		'href' => 'http://africaheart.com/aboutKenya.html',
	));
	
	// PROJECTS
	elgg_register_menu_item('site', array(
		'name' => 'projects',
		'text' => '3 Projects',
		'href' => 'http://africaheart.com/ourWork.html',
	));
	
	// Kids for School
	elgg_register_menu_item('site', array(
		'parent_name' => 'projects',
		'name' => 'kfs',
		'text' => '1 Kids for School',
		'href' => 'http://africaheart.com/ourWork/schoolProject.html',
	));
	
	// WEEP
	elgg_register_menu_item('site', array(
		'parent_name' => 'projects',
		'name' => 'weep',
		'text' => '2 WEEP',
		'href' => 'http://africaheart.com/WEEP.html'
	));
	
	// Freedom for Girls
	elgg_register_menu_item('site', array(
		'parent_name' => 'projects',
		'name' => 'ffg',
		'text' => '3 Freedom for Girls',
		'href' => 'http://africaheart.com/freedom.html',
	));
	
	// More...
	elgg_register_menu_item('site', array(
		'parent_name' => 'projects',
		'name' => 'moreprojects',
		'text' => '4 More...',
		'href' => 'http://africaheart.com/ourWork.html'
	));
	
	// NEWS
	elgg_register_menu_item('site', array(
		'name' => 'news',
		'text' => '4 News',
		'href' => 'http://africaheart.com/reports.html',
	));
	
	
	// blogs
	elgg_register_menu_item('site', array(
		'parent_name' => 'news',
		'name' => 'blogs',
		'text' => '1 Blogs',
		'href' => 'http://africaheartnews.blogspot.com/',
	));
	
	// from the field
	elgg_register_menu_item('site', array(
		'parent_name' => 'news',
		'name' => 'fromthefield',
		'text' => '2 From the Field',
		'href' => '/thewire'
	));
		
	// pulse newsletters
	elgg_register_menu_item('site', array(
		'parent_name' => 'news',
		'name' => 'pulse',
		'text' => '3 Pulse Newsletters',
		'href' => 'http://africaheart.com/reports.html',
	));
	
	// archives
	elgg_register_menu_item('site', array(
		'parent_name' => 'news',
		'name' => 'archives',
		'text' => '4 Archives',
		'href' => 'http://africaheart.typepad.com/africa_heart_updates/archives.html',
	));
	
	// JOIN
	elgg_register_menu_item('site', array(
		'name' => 'join',
		'text' => '5 Join',
		'href' => 'http://africaheart.com/getInvolved.html',
	));
	
	// short-term mission
	elgg_register_menu_item('site', array(
		'parent_name' => 'join',
		'name' => 'shortterm',
		'text' => '1 Short-term mission',
		'href' => 'http://africaheart.com/getInvolved.html',
	));
	
	// summer internship
	elgg_register_menu_item('site', array(
		'parent_name' => 'join',
		'name' => 'internship',
		'text' => '2 Summer Internship',
		'href' => 'http://africaheart.com/getInvolved.html',
	));
	
	// staff position
	elgg_register_menu_item('site', array(
		'parent_name' => 'join',
		'name' => 'internship',
		'text' => '3 Staff Positions',
		'href' => 'http://africaheart.com/getInvolved.html',
	));
	
	// financial support
	elgg_register_menu_item('site', array(
		'parent_name' => 'join',
		'name' => 'financial',
		'text' => '4 Financial Support',
		'href' => 'http://africaheart.com/programsupport.html',
	));
	
	// DONATE
	elgg_register_menu_item('site', array(
		'name' => 'donate',
		'text' => '6 Donate',
		'href' => 'http://africaheart.com/programsupport.html',
	));
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