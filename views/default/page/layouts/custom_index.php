<?php
/**
 * Elgg custom index layout
 * 
 * You can edit the layout of this page with your own layout and style. 
 * Whatever you put in this view will appear on the front page of your site.
 * 
 */
?>

<div class="custom-index elgg-main elgg-grid clearfix">
	<div class="elgg-col elgg-col-1of2">
		<div class="elgg-inner pam">
<?php
// left column

// Top box for login or welcome message
if (elgg_is_logged_in()) {
	$top_box = "<h2>" . elgg_echo("welcome") . " ";
	$top_box .= elgg_get_logged_in_user_entity()->name;
	$top_box .= "</h2>";
	echo elgg_view_module('info',  '', $top_box, array('header' => false));
}

// blogs
if (elgg_is_active_plugin('blog')) {
	echo elgg_view_module('info',  elgg_echo("custom:blogs"), $vars['blogs']);
}

// a view for plugins to extend
echo elgg_view("index/lefthandside");


// members
echo elgg_view_module('info',  elgg_echo("custom:members"), $vars['members']);
?>
		</div>
	</div>
	<div class="elgg-col elgg-col-1of2">
		<div class="elgg-inner pam">

<?php
	$intro = '<p>HEART is dedicated to empowering Kenyans, through education and resources, to create a healthy, disease free life for themselves and their communities. Through the teaching of volunteer teams, community development and empowerment of local leaders, HEART provides pivotal HIV/AIDS and other opportunistic disease prevention training to Kenya. HEARTS’s efforts are in response to the call of those who lack access to the basic knowledge necessary to survive.</p>';

	echo elgg_view_module('featured', 'Knowledge = Power = Survival', $intro);

// right column


if (elgg_is_active_plugin('thewire')) {
	$body = elgg_list_entities(array(
		'type' => 'object',
		'subtype' => 'thewire',
		'limit' => 8,
		'pagination' => FALSE,
		'view_type_toggle' => FALSE,
		'full_view' => FALSE,
	));
	
	echo elgg_view_module('info', elgg_echo('thewire'), $body);
}

// files
if (elgg_is_active_plugin('file')) {
	echo elgg_view_module('info',  elgg_echo("custom:files"), $vars['files']);
}
// a view for plugins to extend
echo elgg_view("index/righthandside");


?>
		</div>
	</div>
</div>
