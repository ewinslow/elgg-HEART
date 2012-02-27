<?php
/**
 * Elgg custom index layout
 *
 * You can edit the layout of this page with your own layout and style.
 * Whatever you put in this view will appear on the front page of your site.
 *
 */
echo elgg_view_module('info', 'Mission Statement', elgg_echo('HEART:mission'));

echo elgg_view_module('info', 'Guiding Scripture', elgg_echo('HEART:scripture'));

echo elgg_view_module('info', 'Latest News', elgg_list_entities(array(
	'type' => 'object',
	'subtypes' => array('blog', 'album'),
	'full_view' => false,
	'list_type' => 'list',
	'limit' => 5,
	'pagination' => false,
)));


?>
<a href="http://africaheart.com/ourWork.html">
	<img src="<?php echo elgg_get_site_url(); ?>mod/HEART/assets/graphics/Heart-Wheel-on-Gold.jpg" />
</a>
