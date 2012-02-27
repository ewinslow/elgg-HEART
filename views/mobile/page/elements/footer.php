<?php
/**
 * Elgg footer
 * The standard HTML footer that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 *
 */

?>

<?php echo elgg_view_menu('footer', array('sort_by' => 'priority')); ?>

<div class="clearfloat pbs"></div>

<div class="HEART-legal">
	HEART is a Christian faith-based non-profit (501 (c) 3) organization.
	HEART is a registered TRUST in Kenya and has a fully qualified board
	of Kenyan Trustees who work with the American counterpart of HEART a
	501 C-3 organization comprised of health professionals and concerned
	business leaders.
</div>

<div class="clearfloat pbs"></div>

<div style="vertical-align: bottom; text-align: center">
	<?php // top:-2px keeps the fb button even with the g+ button ?>
	<div class="fb-like" style="top: -2px" data-href="http://africaheart.com/" data-send="false" data-layout="box_count"></div>
	
	<?php
	echo elgg_view('google/plusone', array(
		'href' => 'http://africaheart.com/',
		'size' => 'tall',
	));
	?>
</div>