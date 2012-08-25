<?php
date_default_timezone_set('America/Los_Angeles');

function HEART_init() {
	elgg_unregister_page_handler('activity');
	
	// Don't really want the standard site menu items...
	elgg_unregister_menu_item('site', 'activity');
	elgg_unregister_menu_item('site', 'thewire');
	elgg_unregister_menu_item('site', 'photos');
	elgg_unregister_menu_item('site', 'blog');
	
	// Don't really want the standard footer menu items...
	elgg_unregister_menu_item('footer', 'report_this');
	elgg_unregister_menu_item('footer', 'about');
	elgg_unregister_menu_item('footer', 'terms');
	elgg_unregister_menu_item('footer', 'privacy');
	
	// Remove menu-item admin configuration option
	elgg_unregister_menu_item('page', 'appearance:menu_items');
	elgg_unregister_menu_item('page', 'appearance:profile_fields');
	elgg_unregister_menu_item('page', 'appearance:default_widgets');

	elgg_unregister_menu_item('topbar', 'elgg_logo');
	
	// Remove friend-related pages
	elgg_unregister_page_handler('friends', 'friends_page_handler');
	elgg_unregister_page_handler('friendsof', 'friends_of_page_handler');
	elgg_unregister_page_handler('collections', 'collections_page_handler');
	
	elgg_register_plugin_hook_handler('register', 'menu:user_hover', 'HEART_unregister_friend_items');
	elgg_register_plugin_hook_handler('register', 'menu:topbar', 'HEART_unregister_friend_items');
	elgg_register_plugin_hook_handler('register', 'menu:entity', 'HEART_unregister_slideshow');
	
	// Remove comments and tags from search
	elgg_unregister_plugin_hook_handler('search_types', 'get_types', 'search_custom_types_tags_hook');
	elgg_unregister_plugin_hook_handler('search', 'tags', 'search_tags_hook');
	
	elgg_unregister_plugin_hook_handler('search_types', 'get_types', 'search_custom_types_comments_hook');
	elgg_unregister_plugin_hook_handler('search', 'comments', 'search_comments_hook');
	
	elgg_register_entity_url_handler('user', 'all', 'HEART_user_url_handler');

	elgg_register_action('entity/backdate', dirname(__FILE__) . '/actions/entity/backdate.php');
	
	elgg_register_js('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js');
	elgg_register_js('jquery-ui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js');
	elgg_register_js('elgg.backdate', 'mod/HEART/js/entity/backdate.js', 'footer');
	elgg_load_js('elgg.backdate');
	
	elgg_register_simplecache_view('js/jquery/cycle');
	elgg_register_js('jquery.cycle', elgg_get_simplecache_url('js', 'jquery/cycle'), 'footer');
	elgg_register_simplecache_view('js/elgg/slides');
	elgg_register_js('elgg.slides', elgg_get_simplecache_url('js', 'elgg/slides'), 'footer');
	
	elgg_load_js('jquery.cycle');
	elgg_load_js('elgg.slides');
	
	elgg_extend_view('css/elgg', 'css/HEART/banners');
	elgg_extend_view('css/elgg', 'css/HEART');

	elgg_extend_view('page/elements/head', 'HEART/metatags', 1);
	elgg_extend_view('page/elements/foot', 'facebook/jssdk');

	elgg_register_ajax_view('form/entity/backdate');

	elgg_register_simplecache_view('page/layouts/custom_index');
	elgg_register_simplecache_view('page/elements/header');

	elgg_register_viewtype_fallback('mobile');
	elgg_register_viewtype_fallback('tablet');
	
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
	
	elgg_register_menu_item('site', array(
		'name' => 'home',
		'text' => 'Home',
		'href' => '/',
		'priority' => 10,
	));
	
	// ABOUT Menu
	elgg_register_menu_item('site', array(
		'name' => 'about',
		'text' => "About",
		'href' => '/about.html',
		'priority' => 20,
	));

	elgg_register_menu_item('site', array(
		'parent_name' => 'about',
		'name' => 'vision',
		'text' => 'Our Vision',
		'href' => '/about.html',
		'priority' => 21,
	));
	
	elgg_register_menu_item('site', array(
		'parent_name' => 'about',
		'name' => 'team',
		'text' => 'Our Team',
		'href' => '/leaderStaff.html',
		'priority' => 22,
	));
	
	elgg_register_menu_item('site', array(
		'parent_name' => 'about',
		'name' => 'partners',
		'text' => 'Our Partners',
		'href' => 'http://www.liftupafrica.org/project_africa_heart_greenhouse_project.php',
		'priority' => 23,
	));

	elgg_register_menu_item('site', array(
		'parent_name' => 'about',
		'name' => 'lodge',
		'text' => 'Our Lodge',
		'href' => '/lodge',
		'priority' => 24,
	));
	
	elgg_register_menu_item('site', array(
		'parent_name' => 'about',
		'name' => 'contactus',
		'text' => 'Contact Us',
		'href' => '/contactUs.html',
		'priority' => 25,
	));
	
	elgg_register_menu_item('site', array(
		'parent_name' => 'about',
		'name' => 'kenya',
		'text' => 'About Kenya',
		'href' => '/kenya',
		'priority' => 26,
	));
	
	// PROJECTS
	elgg_register_menu_item('site', array(
		'name' => 'projects',
		'text' => 'Projects',
		'href' => '/ourWork.html',
		'priority' => 30,
	));
	
	$projects = array(
		'kfs' => 'Kids for School',
		'weep' => "WEEP",
		'ffg' => 'Freedom for Girls',
		'gfc' => 'Greenhouses',
		'props' => 'PROPS',
		'yep' => 'Youth Empowerment',
		'cm' => "Children's Ministry",
		'msni' => "Medical, Surgical, Nutritional",
		'seminars' => 'Health Seminars',
	);

	$i = 31;
	foreach ($projects as $key => $project) {
		$i++;
		elgg_register_menu_item('site', array(
			'parent_name' => 'projects',
			'name' => $key,
			'text' => $project,
			'href' => "/$key",
			'priority' => $i,
		));
	}
	
	// NEWS
	elgg_register_menu_item('site', array(
		'name' => 'news',
		'text' => 'News',
		'href' => '/blog',
		'priority' => 40,
	));
	
	
	// blogs
	elgg_register_menu_item('site', array(
		'parent_name' => 'news',
		'name' => 'blogs',
		'text' => 'Blogs',
		'href' => '/blog/all',
		'priority' => 41,
	));
	
	// photos
	elgg_register_menu_item('site', array(
		'parent_name' => 'news',
		'name' => 'photos',
		'text' => elgg_echo('photos'),
		'href' => '/photos/all',
		'priority' => 42,
	));
	
	elgg_register_menu_item('site', array(
		'parent_name' => 'news',
		'name' => 'videos',
		'text' => 'Videos',
		'href' => '/videos.html',
		'priority' => 43,
	));
		
	// pulse newsletters
	elgg_register_menu_item('site', array(
		'parent_name' => 'news',
		'name' => 'pulse',
		'text' => 'Pulse Newsletters',
		'href' => '/reports.html',
		'priority' => 44,
	));
	
	// JOIN
	elgg_register_menu_item('site', array(
		'name' => 'join',
		'text' => 'Join',
		'href' => '/getInvolved.html',
		'priority' => 50,
	));
	
	// short-term mission
	elgg_register_menu_item('site', array(
		'parent_name' => 'join',
		'name' => 'shortterm',
		'text' => 'Short-term Mission',
		'href' => '/forms.html',
		'priority' => 51,
	));
	
	// summer internship
	elgg_register_menu_item('site', array(
		'parent_name' => 'join',
		'name' => 'internship',
		'text' => 'Summer Internship',
		'href' => '/forms.html',
		'priority' => 52,
	));
	
	// staff position
	elgg_register_menu_item('site', array(
		'parent_name' => 'join',
		'name' => 'internship',
		'text' => 'Staff Positions',
		'href' => '/forms.html',
		'priority' => 53,
	));
	
	// financial support
	elgg_register_menu_item('site', array(
		'parent_name' => 'join',
		'name' => 'financial',
		'text' => 'Financial Support',
		'href' => '/programsupport.html',
		'priority' => 54,
	));
	
	// DONATE
	elgg_register_menu_item('site', array(
		'name' => 'donate',
		'text' => 'Donate',
		'href' => 'https://www.paypal.com/cgi-bin/webscr?hosted_button_id=G49Y74KAAFQN2&cmd=_s-xclick',
		'priority' => 60,
	));
	
	elgg_register_menu_item('site', array(
		'parent_name' => 'donate',
		'name' => 'donate-online',
		'text' => 'Online',
		'href' => '/programsupport.html',
		'priority' => 61,
	));
	
	elgg_register_menu_item('site', array(
		'parent_name' => 'donate',
		'name' => 'donate-phone',
		'text' => 'By phone',
		'href' => '/donate[phone].html',
		'priority' => 62,
	));
	
	elgg_register_menu_item('site', array(
		'parent_name' => 'donate',
		'name' => 'donate-mail',
		'text' => 'By mail',
		'href' => '/donate[mail].html',
		'priority' => 63,
	));
	
	
	elgg_register_page_handler('profile', 'HEART_profile_page_handler');
	
	if (elgg_is_logged_in()) {
		elgg_register_menu_item('topbar', array(
			'name' => 'blog',
			'text' => '+ New blog',
			'href' => '/blog/add/' . elgg_get_logged_in_user_guid(),
			'priority' => 1000,
		));
		
		elgg_register_menu_item('topbar', array(
			'name' => 'photos',
			'text' => '+ New album',
			'href' => '/photos/add/' . elgg_get_logged_in_user_guid(),
			'priority' => 1001,
		));
	}
	
	elgg_register_plugin_hook_handler('access:collections:write', 'user', 'HEART_get_privacy_levels');
	
	elgg_register_plugin_hook_handler('view', 'output/longtext', 'mentions_rewrite');
	
	elgg_register_plugin_hook_handler('route', 'all', 'HEART_user_url_router');
	
	elgg_register_plugin_hook_handler('register', 'menu:entity', 'HEART_backdate_menu_item');
}

function HEART_unregister_friend_items($hook, $type, $items, $params) {
	$result = array();
	foreach ($items as $item) {
		switch ($item->getName()) {
			case 'friends':
			case 'add_friend':
			case 'remove_friend':
				break;
			default:
				$result[] = $item;
				break;
		}
	}
	
	return $result;
}

function HEART_backdate_menu_item($hook, $type, $items, $params) {
	$entity = $params['entity'];

	if ($entity->canEdit() && in_array($entity->getSubtype(), array('blog', 'album'))) {
		$items[] = ElggMenuItem::factory(array(
			'name' => 'backdate',
			'text' => 'Change Date',
			'href' => "#$entity->guid",
		));
		
		return $items;
	}
}

function HEART_unregister_slideshow($hook, $type, $items, $params) {
	$result = array();
	foreach ($items as $item) {
		switch ($item->getName()) {
			case 'slideshow':
				break;
			default:
				$result[] = $item;
				break;
		}
	}
	
	return $result;
}

function HEART_user_url_handler($user) {
	return elgg_normalize_url("/$user->username");
}

function HEART_user_url_router($handler, $username, $params, $return) {
	$user = get_user_by_username($username);

	if ($user && empty($params['segments'])) {
		return HEART_profile_page_handler(array($username));
	}
}

function HEART_get_privacy_levels() {
	return array(
		ACCESS_LOGGED_IN => elgg_echo("LOGGED_IN"),
		ACCESS_PUBLIC => elgg_echo("PUBLIC"),
	);
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

/**
* Profile page handler
*
* @param array $page Array of URL segments passed by the page handling mechanism
* @return bool
*/
function HEART_profile_page_handler($page) {

	if (isset($page[0])) {
		$username = $page[0];
		$user = get_user_by_username($username);
		elgg_set_page_owner_guid($user->guid);
	}

	// short circuit if invalid or banned username
	if (!$user || ($user->isBanned() && !elgg_is_admin_logged_in())) {
		register_error(elgg_echo('profile:notfound'));
		forward();
	}

	$action = NULL;
	if (isset($page[1])) {
		$action = $page[1];
	}

	if ($action == 'edit') {
		// use the core profile edit page
		$base_dir = elgg_get_root_path();
		require "{$base_dir}pages/profile/edit.php";
		return;
	}

	// main profile page
	$body = elgg_view_layout('one_column', array('content' => elgg_view('profile/wrapper')));
	echo elgg_view_page($user->name, $body);
	return true;
}

function mentions_rewrite_callback($matches) {
	if ($user = get_user_by_username($matches[1])) {
		return elgg_view('output/url', array(
			'text' => $user->name,
			'href' => $user->getUrl(),
			'is_trusted' => true,
		));
	} else {
		return $matches[0];
	}
}

function mentions_rewrite($hook, $entity_type, $returnvalue, $params) {
	return preg_replace_callback('/[\b]?@([\p{L}\p{M}_\.0-9]+)[\b]?/iu', 'mentions_rewrite_callback', $returnvalue);
}

elgg_register_event_handler('init', 'system', 'HEART_init');
